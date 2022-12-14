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
       $reference_id = $_GET['reference'];
       $sanitize = htmlspecialchars($reference_id);
       echo $sanitize;
       //$sanitize = filter_var_array($_GET, FILTER_SANITIZE_SPECIAL_CHARS);
       $reference = rawurlencode($sanitize);
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
         "authorization: Bearer sk_test_e4170579195bc1b6d79a7efd0283239553a942c5",
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
     //var_dump($transaction);
   
     if(!$transaction->status){
       die("API return an error:" .$transaction->message);
     }
     if("success" == $transaction->data->status){
       $status = $transaction->data->status;
       $reference = $transaction->data->reference;
       $amount = $transaction->data->amount;
       $email = $transaction->data->customer->email;
       $first_name = $transaction->data->customer->first_name;
       $last_name = $transaction->data->customer->last_name;
       $phone = $transaction->data->customer->phone;
       date_default_timezone_set('Africa/Lagos');
       $date_paid = date('m/d/Y h:i:s a', time());
       // $productName = $transaction->data->metadata->custom_fields[0]->value;
        $newAmount = $amount/100;
        $fullName = $first_name . " " . $last_name;
       $stmt1 = $conn->prepare("INSERT INTO payment (payer_name, payer_email, amount, ref_number, payment_message, payment_date) VALUES(?,?,?,?,?,?)");
       $stmt1->bind_param("ssssss", $fullName, $email, $newAmount, $reference, $status, $date_paid);
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
        //delete_data_by_id("user_registration", $_SESSION['id']);
       header("Location: select-course");
       exit;
   }
?>

<?php include "includes/footer.php"; ?>