<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    /* Style for the search container */
    .input-searh {
        display: flex;
        align-items: center;
    }

    /* Style for the search form */
    .input-searh form {
        display: flex;
        align-items: center;
    }

    /* Style for the search input */
    .input-searh input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px 0 0 5px;
        font-size: 16px;
        outline: none;
    }

    /* Style for the search button */
    .input-searh button {
        padding: 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
    }

    /* Optional: Hover effect for the button */
    .input-searh button:hover {
        background-color: #0056b3;
    }

    /* Optional: Add some box shadow for a subtle lift effect */
    .input-searh input[type="text"],
    .input-searh button {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Optional: Adjust placeholder color */
    .input-searh input[type="text"]::placeholder {
        color: #999;
    }

    /* Style for the search container */
    .input-searh {
        display: flex;
        align-items: center;
        max-width: 400px;
        /* Adjust as needed */
        margin: 0 auto;
        /* Center the container */
    }

    /* Style for the search form */
    .input-searh form {
        display: flex;
        align-items: center;
        width: 100%;
    }

    /* Style for the search input */
    .input-searh input[type="text"] {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px 0 0 5px;
        font-size: 16px;
        width: 200px;
        /* Fixed width */
        outline: none;
        height: 20%;
    }

    /* Style for the search button */
    .input-searh button {
        padding: 12px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        height: 45px;
    }

    /* Optional: Hover effect for the button */
    .input-searh button:hover {
        background-color: #0056b3;
    }

    /* Optional: Add some box shadow for a subtle lift effect */
    .input-searh input[type="text"],
    .input-searh button {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Optional: Adjust placeholder color */
    .input-searh input[type="text"]::placeholder {
        color: #999;
    }
</style>

<body>
    <div class="content_main">
        <div class="container">
            <!-- Star header -->

            <div class="header_main">
                <div class="menu">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="index.php?act=sanphamloc&id_dm=25">ADIDAS</a></li>
                        <li><a href="index.php?act=sanphamloc&id_dm=26">JORDAN</a></li>
                        <li><a href="index.php?act=sanphamloc&id_dm=24">NIKE</a></li>
                        <li><a href="index.php">TIN TỨC</a></li>
                        <li><a href="index.php">VỀ CHÚNG TÔI</a></li>
                        <?php
                        if (isset($_SESSION['user'])) {
                            echo '<li><a href="index.php?act=dathang"> ĐƠN HÀNG</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="logo">
                    <img src="img/logo/lOGODUAN1-removebg-preview.png" alt="" style="width: 230px; height: 230px; margin-left: -32px;">
                </div>

                <!-- <form class="navbar-search" method="post" action="index.php?act=sanpham">
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" name="kyw" placeholder="Tìm kiếm: " />
                        </div>
                    </form> -->
                <div class="input-searh">
                    <form action="index.php?act=search" method="post">
                        <input type="text" name="keysword" placeholder="Tìm kiếm ...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <div class="canhan">
                        <a href="index.php?act=user"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                        <a href="index.php?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a>
                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        <!-- <i class="fa fa-shield" aria-hidden="true"></i>  Khiên-->
                        <!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> Trỏ-->
                    </div>
                <?php
                } else {

                ?>
                    <div class="canhan">
                        <div class="dropdown">
                            <a href="#" class="dropbtn2"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                            <div class="dropdown-content2">
                                <div class="row2">
                                    <div class="culumn2">
                                        <a href="index.php?act=dangky">Đăng ký</a>

                                    </div>
                                    <div class="culumn2">
                                        <a href="index.php?act=dangnhap">Đăng nhập</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        <!-- <i class="fa fa-shield" aria-hidden="true"></i>  Khiên-->
                        <!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> Trỏ-->
                    </div>
                <?php } ?>
            </div>