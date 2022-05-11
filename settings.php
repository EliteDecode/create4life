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
.method {
    border: 1px solid #17a3b84e;
    box-shadow: 2px 1px 5px 5px #17a3b84e;
    height: 240px;
    width: 50%;
    margin: 5% 25%;
    padding: 2% 5%;
    text-align: center;
}

.method h6 {
    font-size: 15px;
    opacity: .8;
}

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
                    <button id='show_payment' class='btn btn-info'
                        style='margin-top:2%; font-weight:bold; font-size:14px'>Update Payment</button>
                    <button id='show_password' class='btn btn-info'
                        style='margin-top:2%; font-weight:bold; font-size:14px'>Change Password</button>
                    <button id='show_password' class='btn btn-info'
                        style='margin-top:2%; font-weight:bold; font-size:14px' onclick='show_payment()'
                        typ='submit'>Payment
                        Method</button>



                    <div class="wrap" style='margin-top:2%; width:70%' id='update_payment'>
                        <div id="msg"></div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="payment" style="font-size:14px; font-weight:bold;"> Payment Method</label>
                                <input type="text" name="method" class="form-control" placeholder="Payment method..."
                                    id='method' />
                            </div>
                            <div class="form-group">
                                <label for="payment" style="font-size:14px; font-weight:bold;"> Payment Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Payment Address..."
                                    id='address' />
                            </div>

                        </form>
                        <button type='submit' id='submit' class='btn btn-info' onclick='update_payment() '>Submit
                        </button>
                    </div>

                    <!--Change Password-->
                    <div class='wrap' style='display:none; margin-top:2%; width:70%' id='update_password' >
                        <div id="msg_p"></div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="payment" style="font-size:14px; font-weight:bold;">Old Password</label>
                                <input type="password" name="method" class="form-control"
                                    placeholder="Your Old password..." id='old_password' />
                            </div>
                            <div class="form-group">
                                <label for="payment" style="font-size:14px; font-weight:bold;">New Password</label>
                                <input type="password" name="method" class="form-control"
                                    placeholder="Your New password..." id='new_password' />
                            </div>
                            <div class="form-group">
                                <label for="payment" style="font-size:14px; font-weight:bold;">Retype New
                                    Password</label>
                                <input type="password" name="method" class="form-control"
                                    placeholder="Retype your New password..." id='new_password2' />
                            </div>

                        </form>
                        <button type='submit' id='submit' class='btn btn-info'
                            onclick='update_password() '>Update</button>
                    </div>

                    <div class="payment_display" id='p_display' style='display:none'>
                        <div class="payment">
                            <div class="container">
                                <div class="method " id='p_msg'>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>







    <script>
    function copy() {

        var input = document.getElementById('input');
        input.select();
        input.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(input.value);

        alert('copied the text: ' + input.value)
    }


    document.getElementById('show_payment').addEventListener('click', e => {
        document.getElementById('update_payment').style.display = 'block';
        document.getElementById('p_display').style.display = 'none';
        document.getElementById('update_password').style.display = 'none';

    })
    document.getElementById('show_password').addEventListener('click', e => {
        document.getElementById('update_payment').style.display = 'none';
        document.getElementById('update_password').style.display = 'block';
        document.getElementById('p_display').style.display = 'none';


    })




    function show_payment() {
        document.getElementById('update_payment').style.display = 'none';
        document.getElementById('p_display').style.display = 'block';
        document.getElementById('update_password').style.display = 'none';

        var show_payment = new XMLHttpRequest();
        var method = 'POST';
        var url = 'ajax/show_payment.php';

        show_payment.open(method, url, true);
        show_payment.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        show_payment.onreadystatechange = function() {
            if (show_payment.readyState == 4 && show_payment.status == 200) {
                var data = show_payment.responseText;
                console.log(data);
                document.getElementById('p_msg').innerHTML = data;

            }
        }

        show_payment.send();

    }







    function update_payment() {
        var method = document.getElementById('method').value;
        var address = document.getElementById('address').value;

        var vars = 'method=' + method + '&address=' + address;


        var update_payment = new XMLHttpRequest();
        var method = 'POST';
        var url = 'ajax/update_payment.php';

        update_payment.open(method, url, true);
        update_payment.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        update_payment.onreadystatechange = function() {
            if (update_payment.readyState == 4 && update_payment.status == 200) {
                var data = update_payment.responseText;
                console.log(data);
                document.getElementById('msg').innerHTML = data;



            }
        }

        update_payment.send(vars);
    }


    function update_password() {
        var old = document.getElementById('old_password').value;
        var newpassword = document.getElementById('new_password').value;
        var newpassword2 = document.getElementById('new_password2').value;

        var vars = 'old_password=' + old + '&new_password=' + newpassword + '&new_password2=' + newpassword2;


        var update_password = new XMLHttpRequest();
        var method = 'POST';
        var url = 'ajax/update_password.php';

        update_password.open(method, url, true);
        update_password.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        update_password.onreadystatechange = function() {
            if (update_password.readyState == 4 && update_password.status == 200) {
                var data = update_password.responseText;
                console.log(data);
                document.getElementById('msg_p').innerHTML = data;



            }
        }

        update_password.send(vars);
    }
    </script>

</body>

</html>