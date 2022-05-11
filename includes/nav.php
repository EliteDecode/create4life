<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    * {
       
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;

    }


    :root {
        --yellow: #333d51;
        --yellow: #d3ac2b;
        --white: #f4f3ea;
    }

    /*--------------------------NAVBAR-------------------------------*/
    nav {
        z-index: 10;
    }

    .navbar-toggler-icon {
        position: relative;
        color: #fff;
        outline: none;
    }

    @media(max-width: 767px) {
        .navbar-toggler-icon>i {
            font-size: 17px !important;
        }

    }

    .menu {
        border: 1px solid #05232c;
        width: 20%;
        color: #fff;
        min-height: 672px;
        background: #05232c;
        position: absolute;
        z-index: 10;
        margin-top: -60px;
        display: none;
    }

    @media(max-width: 767px) {
        .menu {
            width: 100%;
            min-height: 370px;
        }

        .menu-content>ul>i>li {
            list-style-type: none;
            margin-bottom: 10px;
        }
    }

    .display {
        display: block;
    }

    .hide {
        display: none;
    }

    .menu>.close>button>i {
        font-size: 20px;
        width: 30px;
        height: 25px;
        color: #fff;
    }

    .menu>.close>button {
        margin-right: 15px;
        margin-top: 30px;
        border: none;
        outline: none;

        ;
    }

    .menu-content>ul {
        margin-top: 70px;
        margin-left: 40px;
    }

    .menu-content>ul>li {
        list-style-type: none;
        margin-bottom: 30px;
    }

    .menu-content>ul>li>a {
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        color: #fff;
    }

    .menu-content>ul>li>a:hover {
        transition: .5s ease all;
        color: #17a2b8;
    }

    .menu-content>ul>li>a>i {
        padding-right: 3%;
        color: #fff;
    }

    .menu-content>ul>button {
        margin-top: 20px;
    }



    .active {
        color: #007bff !important;
    }

    .navbar {
        display: none;
    }

    .navbar .logo {
        margin-top: 4%;
        margin-left: 3%;
    }



    @media(max-width: 767px) {
        .navbar-desk {
            display: none;
        }

        .navbar {
            display: block;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
    }


    .navbar-desk {
        width: 100%;
        height: 90px;
        padding: 2% 2%;
        z-index: 10 !important;
        position: relative;
    }

    .navbar-desk .container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }



    .logo h6 {
        font-size: 18px;
        color: #fff;
    }

    .nav-links {
        margin-right: 0%;
        width: 60%;

    }

    .nav-links ul {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

    .nav-links ul a {
        text-decoration: none;
        margin-left: 2%;
        font-size: 14px;
        font-weight: 600;
        padding: 0% 2%;

    }

    .nav-links ul a li:hover {
        color: #17a2b8;
        transition: .3s ease all;
    }

    .nav-links ul a li {
        list-style-type: none;
        color: #fff;
    }
    </style>
</head>

<body>
    <section class="navbar-desk">
        <div class="container">
            <div class="logo">
                <h6>Creating<span style='color: #17a2b8; font-family:cursive;'>Life.</span></h6>
            </div>
            <div class="nav-links">
                <ul>
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="donations.php">
                        <li>Donations</li>
                    </a>
                    <a href="gallery.php">
                        <li>Gallery</li>
                    </a>
                    <a href="about.php">
                        <li>About Us</li>
                    </a>
                    <a href="contact.php">
                        <li>Contact Us</li>
                    </a>
                </ul>
            </div>
        </div>
    </section>



    <!--===================Navigation Section for Mobile=========================-->
    <nav class="navbar">
        <div class="logo">
            <h6>Creating<span style='color: #17a2b8; font-family:cursive;'>Life.</span></h6>
        </div>

        <button class="navbar-toggler" type="button" style="outline: none;">
            <span>
                <i class="fa fa-bars" style="color: #fff; font-size: 25px;"></i>
            </span>
        </button>
    </nav>

    <div class="menu">
        <div class="close">
            <button class="close">
                <i class="fa fa-close"></i>
            </button>
        </div>

        <div class="menu-content">
            <ul>

                <li><a href="index.php"><i class="fa fa-home "></i>Home</a></li>
                <li><a href="donations.php"><i class="fa fa-shopping-cart"></i>Donations</a></li>
                <li><a href="about.php"><i class="fa fa-info-circle"></i>about</a></li>
                <li><a href="gallery.php"><i class="fa fa-camera"></i>gallery</a></li>

                <li><a href="contact.php"><i class="fa fa-address-book"></i>contact</a></li>


            </ul>
        </div>
    </div>
    <!--===================END Navigation Section=========================-->