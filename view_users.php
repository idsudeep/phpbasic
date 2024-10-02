<?php 
  require_once 'config.php';

  $query = "select *from users";
// PHP mysqli_query()method is used to execute the query 
  $exe_query = mysqli_query($connect ,$query);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <!-- offset used here to take a margin from both side and it will stick into center   -->
        <div class="row">
            <div class="col-sm-6 offset-3">
                <span style="text-align:center;">
                    <?php if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == 'success') {
                            echo "<h4 style=color:green; >"."User Created Successfully"."</h4>";
                        } else {
                            echo "Try Again";
                        }
                    } ?>
                </span>
                <legend style="text-align: center; margin-top:25px; margin-bottom: 25px;"> User Forms</legend>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                    </tr>
                    <!-- Embedding PHP into HTML -->
                    <?php ?>

                    <tr></tr>
                    <?php  ?>
                </table>

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