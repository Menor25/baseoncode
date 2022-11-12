<?php 
    session_start();
    include "includes/header.php";
    include "private/autoload.php";  

    $Error = "";
?>

<?php
$id = $_GET['i'];

$unHash = base64_decode(urldecode($id));
echo $unHash;

if (empty($unHash)){
    header('Location: course');
}


$newstudent = justRegistered($unHash);

foreach($newstudent as $student){
    $fullName = $student['full_name'];
    $email = $student['email'];
    $phoneNumber = $student['phone_number'];
    $whatsappNumber = $student['whatsapp_number'];

}
$amount = 5000;
$purpose = "Web Development Bootcamp";
//Paystack integration
$curl = curl_init();

// $email = "your@email.com";
$realAmount = $amount * 100; //the amount in kobo.

// url to go to after payment
$callback_url = 'http://localhost/appnation/verify.php';

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'amount' => $realAmount,
        'email' => $email,
        'first_name' => $fullName,
        'phone' => $phoneNumber,
        'purpose' => $purpose,
        'callback_url' => $callback_url,
    ]),
    CURLOPT_HTTPHEADER => [
        "authorization: Bearer sk_live_6b886710d6bbd804a61e689f03e5cdf8df1578d9", //replace this with your own test key
        "content-type: application/json",
        "cache-control: no-cache",
    ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if ($err) {
    // there was an error contacting to Paystack API
    die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

if (!$tranx['status']) {
    // there was an error from the API
    print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
print_r($tranx);
// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $tranx['data']['authorization_url']);


?>

<?php include "includes/footer.php"; ?>