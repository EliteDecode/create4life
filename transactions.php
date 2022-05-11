<?php

session_start();

include ('includes/connect.php');
include ('includes/header.php');
if (!isset($_SESSION['admin'])) {
    header('location: adminLogin.php');
  }


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
                <?php 
                     

                     include_once('includes/connect.php');
 
                     $sql = "SELECT * FROM proof WHERE Stats='approved' ORDER BY DatePaid ASC";
 
                     $result = mysqli_query($conn, $sql);
 
 
                     $output = "";
 
                     $output .= "<table class='table table-bordered   text-center' style='z-index:0;margin-top:5%; color:#085e79;'>
                                 <tr> 
                                
                                 <th style='font-size:13px'>File</th>
                                 <th style='font-size:13px'>Email</th>
                                 <th style='font-size:13px'>Date of Payment</th>
                            
                             
                                 
                                 
                                 
                                 </tr>";
 
                     if (mysqli_num_rows($result) < 1) {
                         $output .= "<tr><td colspan='11'>No Payment Record Yet.</td></tr>";
                     }elseif (mysqli_num_rows($result)) {
                         while($row = mysqli_fetch_assoc($result)){
                             $id = $row['id'];
                             $file = $row['Files'];
                             $email = $row['email'];
                             $date = $row['DatePaid'];
                             
 
                             
                             
                             $output .= "<tr> 
                                       
                                         <td style='font-size:12px; font-weight:bold;'><a href='proofs/$file'>
                                         <img src='proofs/$file' style=' width:100%; height:120px' /></a></td>
                                         <td style='font-size:12px; font-weight:bold;'>$email</td>
                                         <td style='font-size:12px; font-weight:bold;'>$date</td>";
                                        
                         }
                     }
 
                     $output .= "</tr>
                                 </table>";
                     echo $output;
                     ?>
            </div>
        </div>
    </div>



    <script>
    function confirm(e) {
        var confirm_id = e.id;


        var vars = "confirm_id=" + confirm_id;

        var confirm = new XMLHttpRequest();

        var method = "POST";
        var url = "ajax/confirm_payment.php";
        var sync = true;

        confirm.open(method, url, sync);

        confirm.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        confirm.onreadystatechange = function() {
            if (confirm.readyState == 4 && confirm.status == 200) {
                var data = confirm.responseText;
                console.log(data);
                document.getElementById('msg').innerHTML = data;

            }
        }

        confirm.send(vars);

    }
    </script>
</body>

</html>