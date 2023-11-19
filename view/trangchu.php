<!DOCTYPE html>
<html>

<head>
    <title>Trang Chu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/css/sukien.css">
   
    <link rel="stylesheet" href="./assets/css/styleOfTrieu.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.1.1-web/css/all.css">
</head>

<body>
    <!-- hearder -->
    <?php
    include('./partials/header.php');
    ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Aside (Menu) -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='#' name= "menuNgayCuaToi">
                            Ngày của tôi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Điều tôi biết ơn
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Tháng của tôi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Một tháng nhìn lại
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            About
                        </a>
                    </li>
                </ul>
            </div>
</nav>
            

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            
                <!-- Your content goes here -->
                <?php
                include('DangNhap_DangKy/login.php');
               ?>
            </main>
        </div>
    </div>
    <?php
    include('./partials/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>