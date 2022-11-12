<?php 
    session_start();
    include "includes/header.php";
    include "private/autoload.php";  

    $Error = "";
?>

<?php
     $curl = curl_init();

     //Get the reference code from the url
     if(!empty($_GET['reference'])){
       //clean the reference code
       $sanitize = filter_var_array($_GET, FILTER_SANITIZE_STRING);
       $reference = rawurlencode($sanitize["reference"]);
     }else{
       die("No reference was supplied!");
     }
   
     //Set the configurations
     curl_setopt_array($curl, array(
       CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $reference,
       CURLOPT_RETURNTRANSFER => true,
   
       //Set the headers
       CURLOPT_HTTPHEADER => [
         "accept: application/json",
         "authorization: Bearer sk_live_6b886710d6bbd804a61e689f03e5cdf8df1578d9",
         "cache-control: no-cache"
       ]
     )
   
     );
   
     //Execute url
     $response = curl_exec($curl);
   
     $err = curl_error($curl);
     if($err){
       die("cURL return some errors: " . $err);
     }
   
     $transaction = json_decode($response);
   
     if(!$transaction->status){
       die("API return an error:" .$transaction->message);
     }
     if("success" == $transaction->data->status){
       $status = $transaction->data->status;
       $reference = $transaction->data->reference;
       $amount = $transaction->data->amount;
       $email = $transaction->data->customer->email;
       $first_name = $transaction->data->customer->first_name;
       $phone = $transaction->data->customer->phone;
       date_default_timezone_set('Africa/Lagos');
       $date_paid = date('m/d/Y h:i:s a', time());
       // $productName = $transaction->data->metadata->custom_fields[0]->value;
        $newAmount = $amount/100;
       $stmt1 = $conn->prepare("INSERT INTO payment (payer_name, payer_email, amount, ref_number, payment_message, payment_date) VALUES(?,?,?,?,?,?)");
       $stmt1->bind_param("ssssss", $first_name, $email, $newAmount, $reference, $status, $date_paid);
       $stmt1->execute();
       if(!$stmt1){
           echo "There was a problem on your code" . mysqli_error($connection);
       }else {
            $new_id = mysqli_insert_id($conn);
            $hashId = urlencode(base64_encode($new_id));
           header("Location: welcome.php?i=$hashId");
           exit;
       }
       $stmt1->close();
   }
   else{
       header("Location: course");
       exit;
   }
?>

<?php include "includes/footer.php"; ?>