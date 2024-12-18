<?php
session_start();
require_once 'config.php';

if(!isset($_SESSION['userName'])){

  
    echo "session is Set";
}else{
echo "Session is Already set";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>login</title>


</head>

<body>
    <div class="container">
        <!-- offset used here to take a margin from both side and it will stick into center   -->
        <div class="row">
            <div class="col-sm-6 offset-3">
                <span style="text-align:center;">
                    <?php if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == 'error') {
                            echo "<h4 style=color:red; >" . "invalid User's " . "</h4>";
                        } else {
                            echo "Try Again";
                        }
                    } ?>
                </span>
                <legend style="text-align: center; margin-top:25px; margin-bottom: 25px;">Login</legend>
        
                <a href="index.php" style="display: flex;flex-direction:row-reverse;"> Create a New User's</a>

                <!-- passing form data to action.php where GET value  form is add_user and method is post -->
                <form action="action.php?form=loginForm" method="post">

               
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                   
                    <input type="submit" style="margin-left:40%;" value="login" class="col-sm-3 btn btn-success pull-right" name="btn_user_form">

                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>

</html>