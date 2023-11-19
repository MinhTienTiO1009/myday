<header class="container-fluid bg-primary p-2">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar">
                <!-- Icon -->
                <div >
                    <!-- Logo -->
                    <img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 100px;">
                </div>
                <!-- Banner -->
                <div class="banner">
                    <label>Discover amazing content here!</label>
                </div>
            </div>
            <!-- Right Section -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-end align-items-center">

                    <div>
                        <button class="btn"><i class="bi bi-search"></i></button>
                    </div>
                    <div>
                        <button class="btn"><i class="bi bi-bell"></i></button>
                    </div>
                    <!-- User Avatar -->
                    <!-- <div class="text-end">
                        <button class="btn"><i class="bi bi-person-circle"></i></button>
                    </div> -->
                    <div class="text-end">
            <div class="btn-group">
                <button class="btn"><i class="bi bi-person-circle"></i></button>
                <button class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                    <!-- <li><a class="dropdown-item" href="#">Người dùng</a></li> -->
                    <?php
                    if ($_SESSION['login']==true) {
                        echo '<li><a class="dropdown-item" href="index.php?logout">Đăng xuất</a></li>';
                    }else{
                        echo '<li><a class="dropdown-item" href="index.php?login">Đăng nhap</a></li>';
                    }
                    ?>
                    
                </ul>
            </div>
        </div>
                </div>
            </div>

        </div>
    </header>