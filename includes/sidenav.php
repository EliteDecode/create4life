<?php

include ('includes/connect.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .countad {
        border: 1px solid #00c3ff;
        background: #00c3ff;
        font-weight: bolder;
        font-size: 8px;
        border-radius: 100px;
        padding: 0% 2%;
        margin-left: 1.5%;
        position: absolute;
        color: #fff;
    }

    .sidenav {
        border: 1px solid #085e79;
        height: 560px;
        background-color: var(--white);
    }

    .sidenav ul a li {
        list-style-type: none;
    }

    .sidenav ul {
        text-align: center;
    }

    .sidenav ul a {
        display: flex;
        flex-direction: row;
        border-top: 1px solid #f7f7f72a;
        border-bottom: 1px solid #f7f7f72a;
        padding: 7% 0% 7% 8%;
        color: var(--white);
        font-size: 14px;
        text-decoration: none;
    }

    .sidenav ul a:hover {
        background-color: #008cba;
        border-bottom: 1px solid #008cba;
        color: #fff;
    }

    .sidenav ul a i {
        font-size: 14px;
        margin-left: 4%;
        margin-top: 3%;
    }
    </style>
</head>

<body>

    <div class="sidenav shadow" style="background-color:#fff; border:none; ">

        <ul>
            <a href="admin.php" style="color: #085e79; font-weight:bolder;">
                <i class="fa fa-dashboard" style="margin-right:5%"></i>
                <li>Dashboard</li>
            </a>
            <a href="payments.php" style="color: #085e79; font-weight:bolder;">
                <i class="fa fa-dollar" style="margin-right:5%"></i>
                <li>Confirm Payment
                    <?php    
                $sql = "SELECT * FROM proof WHERE Stats = 'pending'";
                $result = mysqli_query($conn, $sql);

                if ($nums = mysqli_num_rows($result)) {
                    $show = "<span class='countad'>$nums</span>";
                }else{
                    $show = "";
                }

                echo $show;
                ?>

                </li>
            </a>
            <a href="transactions.php" style="color: #085e79; font-weight:bolder;">
                <i class="fa fa-donate" style="margin-right:5%"></i>
                <li>Transactions
                    <?php    
                $sql = "SELECT * FROM proof WHERE Stats = 'approved'";
                $result = mysqli_query($conn, $sql);

                if ($nums = mysqli_num_rows($result)) {
                    $show = "<span class='countad'>$nums</span>";
                }else{
                    $show = "";
                }

                echo $show;
                ?>
                </li>
            </a>
            <a href="settings.php" style="color: #085e79; font-weight:bolder;">
                <i class="fa fa-gears" style="margin-right:5%"></i>
                <li>Settings</li>
            </a>
            <a href="logout.php" style="color: #085e79; font-weight:bolder;">
                <i class="fa fa-sign-out" style="margin-right:5%"></i>
                <li>logout</li>
            </a>

        </ul>

    </div>
</body>

</html>