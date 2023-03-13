<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] ?? '' == "POST") {

    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])) {
		$msg = "Please fill out all fields";
    } else {

        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } else {

            $uploads_dir = 'uploads/';
            $tmp_name = $_FILES["profile-picture"]["tmp_name"];
            $name = basename($_FILES["profile-picture"]["name"]);
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $new_name = uniqid() . '_' . date('YmdHis') . '.' . $ext;
            $upload_path = $uploads_dir . $new_name;
            if (move_uploaded_file($tmp_name, $upload_path)) {

                $user_info = array($_POST["name"], $_POST["email"], $new_name);
                $file = fopen("C:\\xampp\\htdocs\\Test\\hasan\\users.csv", "a+");
                fputcsv($file, $user_info);
                fclose($file);

                
                $name = $_POST["name"];  //.................................Set cookie
                setcookie("user_name", $name, time()+2000);

                echo "Registration successful.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
