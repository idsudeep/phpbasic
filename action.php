<?php
require_once 'config.php';
if (isset($_POST['btn_user_form']) && $_GET['form'] == 'add_user') {

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $query = "insert into users(fname ,email ,password ,contact,address)values('$fname','$email','$password',$contact ,'$address')";

    // mysqli_query() is a PHP method used run the sql query on php.

    if (mysqli_query($connect, $query)) {

        echo "user Created";

        // To redirect header('location: locationName');

        header("location:index.php?alert=success");
    }
}
