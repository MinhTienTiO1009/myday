<!DOCTYPE html>
<html>

<head>
    <title>Trang Chu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/sukien.css">
</head>

<body>
    <!-- hearder -->
    <?php
    include('view/partials/header.php');
    ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Aside (Menu) -->
            <?php
            include('view/partials/menu.php');            ?>

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Your content goes here -->
               
                <!-- <?php
            //    include('view/Sukien/index.php');
               ?> -->
            </main>
        </div>
    </div>
    <?php
    include('view/partials/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php include("controller/index.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mục tiêu tháng</title>
    <link rel="stylesheet" href="style.css">
    <script src="./assets/jquery-3.6.1.min.js"></script>
</head>
<body>
    <h1>My Day</h1>
    <a href="../VinVin/view/MTT.php">Mục tiêu tháng</a> <br>
    <a href="../VinVin/view/canhan.php">Tài khoản</a>
</body>
</html>
