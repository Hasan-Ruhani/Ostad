<?php
    $inv_msg = "";
    $inv_email = "";
    $inv_pass = "";
    $inv_email_blank = "";

    $first_name = "H A S A N";

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
            if(($email == "kk.hasan@gmail.com") && ($password == 123)){
                header("Location: users.php?");
            }
            else{
                $inv_msg = "Invalid email or password";
            }
        }
    }