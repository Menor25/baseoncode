<?php 
    session_start();
    include "includes/header.php";
    include "private/autoload.php";  

    $Error = "";
?>

<?php
    $id = $_GET['i'];
    $unHash = base64_decode(urldecode($id));
    if(empty($unHash)){
        header('Location: course');
    }

    $newstudent = justRegistered($unHash);

    foreach($newstudent as $student){
        $fullName = $student['full_name'];
        $email = $student['email'];
        $phoneNumber = $student['phone_number'];
        $whatsappNumber = $student['whatsapp_number'];

    }
// echo $fullName . "<br>";
// echo $email . "<br>";
// echo $phoneNumber . "<br>";
// echo $whatsappNumber . "<br>";
// $amount = 10;
//     echo $unHash;

use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\ItemList;

require 'config.php';

$payer = new Payer();
$payer->setPaymentMethod('paypal');

//Form param
$user_currency = 'USD';
$sub_title = "Web Development Bootcamp";
$sub_price = 10;
$user_id = $id;
$sub_desc = "Web Development Bootcamp";

echo $user_currency . "<br>";
echo $sub_title . "<br>";
echo $sub_price . "<br>";
echo $user_id . "<br>";
echo $sub_desc . "<br>";

// Set some example data for the payment.
$currency = 'USD';
$item_qty = 1;
$amountPayable = $sub_price;
$product_name = $sub_title;
$item_code = $user_id;
$description = $sub_desc;
$invoiceNumber = uniqid();
$my_items = array(
	array('name'=> $product_name, 'quantity'=> $item_qty, 'price'=> $amountPayable, 'sku'=> $item_code, 'currency'=> $currency)
);
	
$amount = new Amount();
$amount->setCurrency($currency)
    ->setTotal($amountPayable);

$items = new ItemList();
$items->setItems($my_items);
	
$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setDescription($description)
    ->setInvoiceNumber($invoiceNumber)
	->setItemList($items);

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl($paypalConfig['return_url'])
    ->setCancelUrl($paypalConfig['cancel_url']);

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions([$transaction])
    ->setRedirectUrls($redirectUrls);

try {
    $payment->create($apiContext);
} catch (Exception $e) {
    throw new Exception('Unable to create link for payment');
}

header('location:' . $payment->getApprovalLink());
exit(1);
?>

<?php include "includes/footer.php"; ?>