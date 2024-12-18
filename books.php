<?php
session_start();

require_once 'config.php';
$query = "select * from book_details";
$result = mysqli_query($connect, $query);
?>


<html>
<title>Books Details</title>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<style>
    .main {
        margin: 50px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .item {

        height: auto;
        margin: 25px;
        padding: 10px;
        border: 1px solid #1316134f;
        font-size: 28px;

    }
</style>

<body>
    <div class="Container">


        <span style="float:right;">
            <?php if (isset($_SESSION['userid'])) { ?>
                <a href="logout.php">Logout</a>
            <?php } ?>
        </span>

        <span style="float:left;">
            <?php if (isset($_GET['alert'])){ ?>
                    <h3> order Success, Thank You.</h3>
            <?php } ?>
        </span>

        <input type="text" name="searchBook" placeholder="Search Book">
        <div class="main">

            <?php
            while ($row = mysqli_fetch_assoc($result)) { ?>
                
                    <div class="item">

                        <img src="<?php echo $row['img_path']; ?>" width="90px" height="90px">

                        <br>
                        <h5> Title : <?php echo $row['title']; ?></h5>
                        <h5> Author : <?php echo $row['author']; ?></h5>
                        <h5> price : <?php echo $row['price']; ?></h5>
                        <h5> Status : <?php echo $row['status']; ?></h5>
                        <form action="action.php?form=orderForm" method="POST">
                             <input type="number" name="userid" value="<?php echo $_SESSION['userid']; ?>" hidden>
                             <input type="number" name="productid" value="<?php echo $row['id'] ?>" hidden>
                             <input type="number" name="price" value="<?php echo $row['price'] ?>" hidden>
                            <input type="number"name="qty" class="form-control" placeholder="Qty" required>
                            <br>
                            <input type="submit"name="order_btn" value="order">
                        </form>
                    </div>
                
            <?php } ?>
        </div>
    </div>

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"></script>