<?php

$firstname =  $_POST["firstname"];
$lastname =   $_POST["lastname"];
$email =      $_POST["email"];

$errors = [
    'firstname' => '',
    'lastname' => '',
    'email' => ''
];

if(isset($_POST["submit"])) {


    if(empty($firstname)) {
        $errors['firstnameError'] = "First name is required.";
    }
    if(empty($lastname)){
        $errors['lastnameError'] = "Last name is required.";
    }
    if(empty($email)){
        $errors['emailError'] = "Email is required.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = "Invalid email format.";
    } 
    
    if(!array_filter($errors)){
        $firstname =  mysqli_real_escape_string($conn, $_POST["firstname"]);
        $lastname =   mysqli_real_escape_string($conn, $_POST["lastname"]);
        $email =      mysqli_real_escape_string($conn, $_POST["email"]);

        $sql = "INSERT INTO users (firstname, lastname, email) 
        VALUES ('$firstname', '$lastname', '$email')";

    if (mysqli_query($conn, $sql)) {
        header("Location: " . $_SERVER['PHP_SELF']);
    } else {
        echo "Error: " . mysqli_error($conn);   
    }
}
    
}

?>