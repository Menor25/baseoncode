<?php
    //Function for htmlspecialchar
    function h($string = "")
    {
        return(htmlspecialchars($string));
    }

    //conforming query
    function confirmQuery($result)
    {
        global $conn;
        if (!$result) {
        die("QUERY FAILED" . mysqli_Error($conn));
        }
    }

    //Redirection function
    function redirect_to($location)
    {
        header("Location: " . $location);
        exit;
    }

    function convert_date_mysql($date) {
        $date_explode = explode("-",$date);
    
        $day = $date_explode[0];
        $month = $date_explode[1];
        $year = $date_explode[2];
    
        $mysql_date = $year."-".$month."-".$day;
        if($mysql_date == '--') $mysql_date = '';
    
            return $mysql_date;
    }

    //For post request
    function Is_Post_request()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    //For get request
    function Is_Get_request()
    {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    //encode id to string cryptography
    function encodeString($string)
    {
        return urlencode(base64_encode($string));
    }

    //decode cryptography
    function decodeString($string)
    {
        return base64_decode(urldecode($string));
    }

    //Initial capitalization
    function initialCap($string)
    {
        return ucwords(strtolower($string));
    }

    //Check if email exist
    function email_exists($email, $table)
    {
        global $conn;

        $query = "SELECT email FROM $table WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        confirmQuery($result);

        if(mysqli_num_rows($result) > 0) {
        return true;
        } else {
        return false;
        }
    }

    //check if username exist
    function username_exists($username, $table)
    {
        global $conn;

        $query = "SELECT username FROM {$table} WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        confirmQuery($result);

        if(mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Get a single data
    function find_by_id($id, $table) 
    {
        global $conn;
        global $Error;
        $data = array();
        $get_data = "SELECT * FROM {$table} WHERE id = {$id} LIMIT 1";
        $get_data_query = mysqli_query($conn, $get_data);

        if ($get_data_query->num_rows === 0)
        {
            $_SESSION[$Error] = "No record to display.";
                $_SESSION['msg_type'] = "danger";

                return ($_SESSION[$Error]);
        }
        while ($row = $get_data_query ->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    //Find all data
    function find_all($table) 
    {
        global $conn;
        global $Error;
        $data = array();
        $get_data = "SELECT * FROM {$table}";
        $get_data_query = mysqli_query($conn, $get_data);

        if ($get_data_query->num_rows === 0)
        {
            $_SESSION[$Error] = "No record to display.";
                $_SESSION['msg_type'] = "danger";

                return ($_SESSION[$Error]);
        }
        while ($row = $get_data_query ->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    //count all data
    function count_all() 
    {
        global $conn;
        global $Error;
        $get_data = "SELECT * FROM payment";
        $get_data_query = mysqli_query($conn, $get_data);

        if ($get_data_query)
        {
            $student_count = mysqli_num_rows($get_data_query);
            return $student_count;
        } else {
            return 0;
        }
        
    }

    //Delete data
    function delete_data_by_id($table, $id)
    {
        global $conn;

        $sql = "DELETE FROM {$table} WHERE id = {$id}";
        echo $sql;
        $get_query = mysqli_query($conn, $sql);

        if ($get_query) {
            redirect_to("select-course");
        }
    }