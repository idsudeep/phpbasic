<?php
require_once 'config.php';

$query = "select *from users";
// PHP mysqli_query()method is used to execute the query 
$exe_query = mysqli_query($connect, $query);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <!-- offset used here to take a margin from both side and it will stick into center   -->
        <div class="row">
            <div class="col-sm-10 offset-1">
                <span style="text-align:center;">
                    <?php if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == 'success') {
                            echo "<h4 style=color:green; >" . "User Created Successfully" . "</h4>";
                        } else {
                            echo "Try Again";
                        }
                    } ?>
                </span>
                <legend style="text-align: center; margin-top:25px; margin-bottom: 25px;"> User's Details</legend>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    <!-- Embedding PHP into HTML -->
                    <?php while ($records = mysqli_fetch_assoc($exe_query)) { ?>

                        <tr>
                            <td><?php echo $records['fname']; ?></td>
                            <td><?php echo $records['email']; ?></td>
                            <td><?php echo $records['contact']; ?></td>
                            <td><?php echo $records['address']; ?></td>
                            <td><a href="#" class="bi bi-pencil-square"></a> | <a href="#" class="bi bi-trash" style="color:red;"></a> </td>
                        </tr>
                    <?php  } ?>
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