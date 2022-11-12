<?php
    //Function for htmlspecialchar
    function h($string = "")
    {
        return(htmlspecialchars($string));
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