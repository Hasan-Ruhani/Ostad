<?php
    $inv_first ="";
    $inv_last ="";
    $inv_email_blank ="";
    $inv_email ="";
    $blank_pass ="";
    $inv_pass="";
    $suc_msg = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $first_name = $_POST["fName"];
        $last_name = $_POST["lName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repet_password = $_POST["cPassword"];

        $invalids = array();

        if(empty($first_name)){
            $invalids[] = "First name is required";
            $inv_first = "First name is required*";
        }

        if(empty($last_name)){
            $invalids[] = "Last name is required";
            $inv_last = "Last name is required*";
        }

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
            $blank_pass = "Password is required*";
        }
        elseif($password != $repet_password){
            $invalids[] = "Password mismatch";
            $inv_pass = "Password mismatch*";
        }

        if(count($invalids) == 0){
            $suc_msg = "Hey $last_name, Your registration successfully";
        }
        
        // else{
        //     foreach($invalids as $invalid){
        //         $invalid_msg = "<li>$invalid</li>";
        //     }
        // }
    }