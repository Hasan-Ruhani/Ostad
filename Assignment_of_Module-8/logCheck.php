<?php
    $suc_msg = "";
    $inv_email = "";
    $inv_pass = "";
    $inv_email_blank = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $password = $_POST["pass"];

        $invalids = array();

        if(empty($email)){
            $invalids[] = "Email address is required";
            $inv_email_blank = "Email address is required*";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $invalids[] = "Invalid email address";
            $inv_email = "Invalid email address*";
        }

        if(empty($password)){
            $invalids[] = "Password is required";
            $inv_pass = "Password is required*";
        }

        if(count($invalids) == 0){
            $suc_msg = "Hey $first_name, You are welcome";
            header("Location: login.php?");
        }
    }