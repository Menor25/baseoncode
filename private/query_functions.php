<?php
    ob_start();

    include "database.php";
    include "myfunctions.php";
?>
<?php
//Student registration
function register($full_name, $email, $phone_number, $whatsapp_number, $country, $state, $city, $course)
 {

     global $conn;
     global $Error;

     if(isset($full_name) && $full_name == ""){ $_SESSION[$Error] = "Please enter your full name"; 
        $_SESSION['msg_type'] = "danger";}
    if(isset($email) && $email == ""){ $_SESSION[$Error] = "You did not enter your email"; 
            $_SESSION['msg_type'] = "danger";}
    if(isset($phone_number) && $phone_number == ""){ $_SESSION[$Error] = "You did not enter your phone number"; 
            $_SESSION['msg_type'] = "danger";}
    if(isset($whatsapp_number) && $whatsapp_number == ""){ $_SESSION[$Error] = "You did not enter your whatsapp number"; 
            $_SESSION['msg_type'] = "danger";}
    if(isset($country) && $country == ""){ $_SESSION[$Error] = "You did not select your country"; 
            $_SESSION['msg_type'] = "danger";}
    if(isset($state) && $state == ""){ $_SESSION[$Error] = "You did not enter your state"; 
            $_SESSION['msg_type'] = "danger";}
    if(isset($city) && $city == ""){ $_SESSION[$Error] = "You did not enter your city"; 
            $_SESSION['msg_type'] = "danger";}
    if(isset($course) && $course == ""){ $_SESSION[$Error] = "You did not select your course"; 
            $_SESSION['msg_type'] = "danger";}

    //Check for valid input fields
    if(!preg_match("/^[a-zA-Z'. -]+$/", $full_name)){
        $_SESSION[$Error] = "Full name is not valid! It must not contain numbers or special characters"; 
        $_SESSION['msg_type'] = "danger";
        return ($_SESSION[$Error]);

      }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION[$Error] = "Invalid email format"; 
        $_SESSION['msg_type'] = "danger";
        return ($_SESSION[$Error]);

      }

    if(!preg_match("/^\\+?[0-9][0-9]{10,14}$/", $phone_number)) {
        $_SESSION[$Error] = "Invalid phone number"; 
        $_SESSION['msg_type'] = "danger";
        return ($_SESSION[$Error]);
      }
    
    if(!preg_match("/^\\+?[0-9][0-9]{10,14}$/", $whatsapp_number)) {
        $_SESSION[$Error] = "Invalid whatsapp number"; 
        $_SESSION['msg_type'] = "danger";
        return ($_SESSION[$Error]);
      }

    if (!preg_match("/^[A-Za-z]+$/", $country))
    {
        $_SESSION[$Error] = "Country name cannot contain numbers or special characters";
        $_SESSION['msg_type'] = "danger";
        return ($_SESSION[$Error]);
    }
    if (!preg_match("/^[A-Za-z]+$/", $city))
    {
        $_SESSION[$Error] = "City cannot contain numbers or special characters";
        $_SESSION['msg_type'] = "danger";
        return ($_SESSION[$Error]);
    }
    if (!preg_match("/^[A-Za-z]+$/", $state))
    {
        $_SESSION[$Error] = "State cannot contain numbers or special characters";
        $_SESSION['msg_type'] = "danger";
        return ($_SESSION[$Error]);
    }

    if($Error == "")
    {
        $sql = "SELECT * FROM user_registration ";
        $sql .= "WHERE full_name='". $full_name ."' ";
        $sql .= "AND phone_number='". $phone_number ."'";

        // echo $sql;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);


        if ($row > 0)
        {
            while($row = mysqli_fetch_assoc($result)){
                $user_id = $row['id'];
                $hashId = urlencode(base64_encode($user_id));
            }
                redirect_to("payment.php?i=$hashId");
                exit();
        }else
        {
            $randomPassword = rand();            
            $sql  = "INSERT INTO user_registration ";
            $sql .= "(full_name, email, phone_number, whatsapp_number, country, state, city, course, password) ";
            $sql .= "VALUES ('". $full_name ."', '". $email ."', '". $phone_number ."', '". $whatsapp_number ."', 
                        '". $country ."', '". $state ."', '". $city ."', '". $course ."', '". $randomPassword ."')";
            //echo $sql;
                        
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $new_id = mysqli_insert_id($conn);
                $hashId = urlencode(base64_encode($new_id));

                redirect_to("payment.php?i=$hashId");
                // $_SESSION['new_id'] = $new_id;

                // $_SESSION[$Error] = "Registration successfully!";
                // $_SESSION['msg_type'] = "success";
                // if($country == "Nigeria"){
                //     header("Location: payment.php?i=$hashId");
                    
                // }else{
                //     header("Location: paypal/request.php?i=$hashId");
                // }
            
            }else
            {
                $_SESSION[$Error] = "Registration was not successful, please try again";
                $_SESSION['msg_type'] = "danger";
                return ($_SESSION[$Error]);
                header("Location: register");
            }
        }
    }else
    {
        $_SESSION[$Error] = "Unable to add details, please contact the support team!";
        $_SESSION['msg_type'] = "danger";
        return ($_SESSION[$Error]);
        
        header("Location: register");
    }
    
}

//Select newly registered student
function justRegistered($newId){
    global $conn;
    $data = array();

    $sql = "SELECT * FROM user_registration WHERE id={$newId} LIMIT 1";
    $sql_query = mysqli_query($conn, $sql);
    // echo $sql;

    while ($row = mysqli_fetch_assoc($sql_query)) {
        $data[] = $row;
    }

    return $data;
}

//Student registration
function insertPayment($payer_name, $payer_email, $amount, $ref_number, $payment_message, $payment_date)
 {

     global $conn;
     global $Error;

  
        $sql = "SELECT * FROM payment ";
        $sql .= "WHERE payer_name='". $payer_name ."' ";
        $sql .= "AND ref_number='". $ref_number ."'";

        // echo $sql;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);


        if ($row > 0)
        {
            $_SESSION[$Error] = "Payment details for $payer_name already exist";
            $_SESSION['msg_type'] = "danger";
        }else
        {

            $sql  = "INSERT INTO payment ";
            $sql .= "(payer_name, payer_email, amount, ref_number, payment_message, payment_date) ";
            $sql .= "VALUES ('". $payer_name ."', '". $payer_email ."', '". $amount ."', '". $ref_number ."', 
                        '". $payment_message ."', '". $payment_date ."')";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
                $new_id = mysqli_insert_id($conn);
                // echo $new_id;
                

                // $_SESSION[$Error] = "Registration successfully!";
                // $_SESSION['msg_type'] = "success";
           $hash_id = urlencode(base64_encode($new_id));
                    header("Location: welcome.php?i=$hash_id");
                    
              
            
            }else
            {
                $_SESSION[$Error] = "Registration was not successful, please try again";
                $_SESSION['msg_type'] = "danger";
                header("Location: course");
            }
        }

    
}

//Select newly registered student
function getPaymentDetails($newId){
    global $conn;
    $data = array();

    $sql = "SELECT * FROM payment WHERE id={$newId} LIMIT 1";

    $sql_query = mysqli_query($conn, $sql);
    // echo $sql;

    while ($row = mysqli_fetch_assoc($sql_query)) {
        $data[] = $row;
    }

    return $data;
}
?>