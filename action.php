<?php 

echo "<pre>";
print_r($_POST);

if(isset($_POST['btn_user_form']) && $_GET['form']=='add_user'){

   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $contact = $_POST['contact'];
}
?>