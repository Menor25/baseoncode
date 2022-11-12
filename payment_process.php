<?php 
    session_start();
    include "includes/header.php";
    include "private/autoload.php";  

    $Error = "";
?>

<?php
$studId = $_SESSION['new_id'];
        if(isset($_GET['status'])){
        $status = $_GET['status'];
        if($status == "cancelled"){
            $deleteUser = "DELETE FROM user_registration WHERE id={$studId} LIMIT 1";
            $deleteUser_query = mysqli_query($conn, $deleteUser);
            header("Location: course");
        }elseif($status == "successful"){
            $trans_id = $_GET['transaction_id'];
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$trans_id}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: Bearer FLWSECK_TEST-cafd1c6f7c3323d47b92d8e56f7b076a-X",
                    "Content-Type: application/json"
                ),

            ));
        $response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($response);

        if($res->status == "success"){
            $amountPaid = $res->data->charged_amount;
            $amountToBePaid = $res->data->meta->price;
            if($amountPaid >= $amountToBePaid){
                $successful = $res->message;
                $amount = $res->data->amount;
                $created_at = $res->data->created_at;
                $name = $res->data->customer->name;
                $email = $res->data->customer->email;
                $reference = $res->data->customer->id;

                if($amountPaid == "5000"){
                    //insert into database

                    insertPayment(
                            $payer_name = $name,
                            $payer_email = $email,
                            $amount = $amount,
                            $ref_number = $reference,
                            $payment_message = $successful,
                            $payment_date = $created_at
                        );
                    echo $successful . "<br>";
                    echo $name . "<br>";
                    echo $amount . "<br>";
                    echo $created_at . "<br>";
                    

                }else{
                    echo "Payment not amount not complete.";
                }


            }else{
                echo "Payment not completely paid.";
            }
        }else{
            echo "Unable to make payment.";
        }
        }
    }
?>

<?php include "includes/footer.php"; ?>