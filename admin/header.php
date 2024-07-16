<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="../index.php"><img src="../img/logo/1.png" alt="Logo" srcset="" width="100"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <a href="index.php">
                            <li class="sidebar-title">Menu</li>
                        </a>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Danh Mục</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?act=list-dm">Danh Sách</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="index.php?act=add-dm">Thêm</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Sản Phẩm</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?act=list-sp">Danh Sách Sản Phẩm </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="index.php?act=add-sp">Thêm Sản Phẩm </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Tài Khoản </span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?act=list_taikhoan">Danh Sách Tài Khoản </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Bình Luận</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?act=list-bl">Danh Sách Bình Luận</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Quản Lí Size </span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?act=list-sz">Danh sách size</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="index.php?act=add-sz">Thêm size</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Biến Thể Sản Phẩm </span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?act=addbtsp">Thêm biến thể</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="index.php?act=listbtsp">Danh sách biến thể</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Quản Lí Đơn Hàng </span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?act=list-dh">Danh Sách Đơn Hàng </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-vertical-1-column.html">..... </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Thống Kê</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="index.php?act=thongke">Thống kê sản phẩm</a>
                                </li>
                                <!-- <li class="submenu-item ">
                                    <a href="layout-vertical-1-column.html">Sản phẩm bán chạy</a>
                                </li> -->
                            </ul>
                        </li>


                        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                </div>
            </div>