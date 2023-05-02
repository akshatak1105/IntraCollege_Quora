<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcome to VIT Quora</title>
    <style>
    .container {
        min-height: 87vh;
    }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>


    <?php
    $showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name_category = $_POST['category_name'];
    $desc_category = $_POST['category_desc'];


            $sql = "INSERT INTO `new_category` (`name_category`, `describe_category`) VALUES ( '$name_category', '$desc_category')";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                echo "New Category is requested" .  "<br>";             
            }
}
?>

    <div class="container my-3">
        <h1 class="text-center">Request New Category</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">New Category</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name of category"
                    name="category_name">

            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Describe Category</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                    name="category_desc"></textarea>

            </div>
            <button type="submit" class="btn btn-success">Request Cateory</button>
        </form>
    </div>;

    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>