<?php session_start();
if (empty($_SESSION['id'])) {
    header('Location: ./');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="../assets/techbocx.ico" />

    <title>TechBox</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Tienda <sup>Online</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Menús</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">
                    <i class="fas fa-tag"></i>
                    <span>Categorias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">
                    <i class="fas fa-list"></i>
                    <span>Productos</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nombre']; ?></span>
                                <img class="img-profile rounded-circle" src="data:image/jpeg;base64,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">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../salir.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->