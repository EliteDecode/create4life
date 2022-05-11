<?php
session_start();

$ad = $_SESSION['admin'];
if (!isset($_SESSION['admin'])) {
    header('location: adminLogin.php');
  }

include ('includes/connect.php');
include ('includes/header.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styling/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../styling/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../styling/admin.css" />
    <link rel="stylesheet" href="../styling/header.css" />
    <title>nav</title>
</head>

<style>
.boxes {
    width: 90%;
    margin: 15% 5%;
    padding: 4% 6%;
    color: #fff;
    border-radius: 10px;

}

.boxes h4 {
    font-weight: 600;
}

.i i {
    font-size: 30px;
}

.i {
    margin-top: 10%;
}
</style>

<body>
    <?php include ('includes/admin_nav.php') ?>
    <div class="wrap">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <?php include('includes/sidenav.php') ?>
            </div>
            <div class="col-md-10 col-lg-10 col-xl-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <div class="bg-primary boxes">
                                <div class="row">
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                        <h4>Total</h4>
                                        <h4>Transactions</h4>
                                        <?php    
                                    $sql = "SELECT * FROM proof WHERE Stats = 'approved'";
                                    $result = mysqli_query($conn, $sql);

                                    if ($nums = mysqli_num_rows($result)) {
                                        $show = "<h4>$nums</h4>";
                                    }else{
                                        $show = "<h4>0</h4>";
                                    }

                                    echo $show;
                                    ?>

                                    </div>


                                    <div class="i">
                                        <i class="fa fa-donate"></i>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <div class="bg-secondary boxes">
                                <div class="row">
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                        <h4>Pending</h4>
                                        <h4>Confirmations</h4>
                                        <?php    
                                    $sql = "SELECT * FROM proof WHERE Stats = 'pending'";
                                    $result = mysqli_query($conn, $sql);

                                    if ($nums = mysqli_num_rows($result)) {
                                        $show = "<h4>$nums</h4>";
                                    }else{
                                        $show = "<h4>0</h4>";
                                    }

                                    echo $show;
                                    ?>
                                    </div>
                                    <div class="i">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <div class="bg-warning boxes">
                                <div class="row">
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                        <h4>&nbsp</h4>
                                        <h4>Settings</h4>
                                        <h4>&nbsp</h4>
                                    </div>
                                    <div class="i">
                                        <i class="fa fa-gears"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>