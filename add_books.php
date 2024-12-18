<?php
require_once 'config.php';
if (isset($_POST['add_book_btn'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];

    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];



    $file_extension = pathinfo($image_name, PATHINFO_EXTENSION);

    $unique_name = uniqid("img_", true) . "." . $file_extension;

    $upload_dir = "uploads/";
    $image_path = $upload_dir . $unique_name;


    if (move_uploaded_file($tmp_name, $image_path)) {
        $query = "insert into book_details (title ,author ,price,img_path) values ('$title','$author' ,'$price','$image_path')";

        if (mysqli_query($connect, $query)) {

            echo "Books Added";
        } else {
            echo "error on insertion";
        }
    }
}

?>

<html>
<title>Add Book</title>

<head></head>
<style>
    #main {

        margin: 100px;

    }

    input {

        margin-left: 15px;
        margin-bottom: 30px;
    }
</style>

<body>

    <div id="main">
        <h1>Add Books Details</h1>

        <form action="add_books.php" method="POST" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" style="margin-left:30px;"><br>
            <label>Author</label>
            <input type="text" name="author"><br>
            <label>Price</label>
            <input type="number" name="price" style="margin-left:28px;"><br>
            <label>Book Image</label>
            <input type="file" name="image"> <br>
            <input type="submit" name="add_book_btn" value="Submit" style="margin-left:70px;">
        </form>

    </div>

</body>

</html>