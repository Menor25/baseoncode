<?php
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'config.php';

if (empty($_GET['paymentId']) || empty($_GET['PayerID'])) {
    throw new Exception('The response is missing the paymentId and PayerID');
}

$paymentId = $_GET['paymentId'];
$payment = Payment::get($paymentId, $apiContext);

$execution = new PaymentExecution();
$execution->setPayerId($_GET['PayerID']);

try {
    // Take the payment
    $payment->execute($execution, $apiContext);

    try {
        $db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);

        $payment = Payment::get($paymentId, $apiContext);

        $data = [
            'product_id' => $payment->transactions[0]->item_list->items[0]->sku,
            'transaction_id' => $payment->getId(),
            'payment_amount' => $payment->transactions[0]->amount->total,
            'currency_code' => $payment->transactions[0]->amount->currency,
            'payment_status' => $payment->getState(),
            'invoice_id' => $payment->transactions[0]->invoice_number,
            'product_name' => $payment->transactions[0]->item_list->items[0]->name,
			'description' => $payment->transactions[0]->description,
        ];
        if (addPayment($data) !== false && $data['payment_status'] === 'approved') {
            // Payment successfully added, redirect to the payment complete page.
			$inserids =$db->insert_id;
            $hashInsertId = urlencode(base64_encode($inserids));
            header("location:http://localhost/appnation/paypal/PaypalSuccess.php?payid=$hashInsertId");
            exit(1);
        } else {
            // Payment failed
			header("location:http://localhost/appnation/paypal/PaypalFailed.php");
             exit(1);
        }

    } catch (Exception $e) {
        // Failed to retrieve payment from PayPal

    }

} catch (Exception $e) {
    // Failed to take payment

}

/**
 * Add payment to database
 *
 * @param array $data Payment data
 * @return int|bool ID of new payment or false if failed
 */
function addPayment($data)
{
    global $db;

    if (is_array($data)) {
		//'isdsssss' --- i - integer, d - double, s - string, b - BLOB
        $stmt = $db->prepare('INSERT INTO `payment` (payer_name,payer_email, amount,ref_number, payment_message, payment_date) VALUES(?, ?, ?, ?, ?, ?)');
        $stmt->bind_param(
            'ssssss',
            $data['product_name'],
            $data['transaction_id'],
            $data['payment_amount'],
            $data['invoice_id'],
            $data['payment_status'],
            date('Y-m-d H:i:s')
        );
        $stmt->execute();
        $stmt->close();
		
        return $db->insert_id;
    }

    return false;
}