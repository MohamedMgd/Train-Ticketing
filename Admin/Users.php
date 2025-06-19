<?php
require_once '../../Controllers/AuthController.php';
require_once '../../Models/user.php';
$AuthController = new AuthController;
$users = $AuthController->getUser();

$errMsg = "";







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="../assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="../assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/admin/css/theme.css" rel="stylesheet" media="all">


</head>

<body class="animsition">
    <style></style>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <h3>Journey.</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                        </li>

                        <li>
                            <a href="Users.php" id="#user">
                                <i class="fas fa-user"></i>Users</a>
                        </li>

                        <li>
                            <a href="Bookings.php" id="#booking">
                                <i class="fas fa-ticket-alt"></i>Bookings</a>
                        </li>

                        <li>
                            <a href="Train.php" id="#train">
                                <i class="fas fa-train"></i>Trains</a>
                        </li>

                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">


                            </form>
                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">

                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Amr yasser</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div>



                                                <div class="account-dropdown__footer">
                                                    <a
                                                        href="/Users/amrya/Desktop/front end phase 2/front end/log in.html">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
            <div class="section__content section__content--p30">

            <div class="tab-pane fade show active " id="account" role="tabpanel" aria-labelledby="account-tab">
                        <h3 class="mb-4">User Settings</h3>
                        <?php

                                        if ($errMsg != "") {
                                        ?>
                                            <div class="alert alert-danger" role="alert"><?php echo $errMsg ?></div>
                                        <?php
                                        }

                                        ?>
                        <form action="Train.php" method="POST" enctype='multipart/form-data'>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>user name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="text" class="form-control" name="email" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                            

                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Edit</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                        </form>
                    </div>
            </div>
            </div>
                    <div class="container-fluid">
                        <div class="row">


                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Users</h3>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>

                                                <th>id</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>password</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <!-- row -->
                                        
                                            <?php
                                            ?><tr class="tr-shadow"><?php
                                            foreach($users as $user)
                                            {
                                                ?>
                                                <td><?php echo $user["id"] ?></td>
                                                <td><?php echo $user["name"] ?></td>
                                                <td><?php echo $user["email"] ?></td>
                                                <td><?php echo $user["password"] ?></td>
                                                
                                                
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                </tr>
                                                <?php echo "<br>"?>
                                                <?php
                                            }
                                            ?>




<!-- row -->


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            
    <!-- Jquery JS-->
    <script src="../assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/admin/vendor/wow/wow.min.js"></script>
    <script src="../assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->
    <!-- Jquery JS-->
    <script src="../assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/admin/vendor/wow/wow.min.js"></script>
    <script src="../assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->