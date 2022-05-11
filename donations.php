<?php
  include('./includes/header.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./includes/stylingIndex.php') ?>

    <style>
    .method {

        box-shadow: 2px 1px 5px 5px #17a3b84e;
        height: 300px;
        width: 50%;
        background: #fff;
        margin: -21% 25% 0% 25%;
        padding: 2% 5%;
        z-index: 22222;
        position: relative;
        text-align: center;
    }

    .method h6 {
        font-size: 15px;
        opacity: .8;
    }

    .form {
        width: 50%;
        margin: 5% 25%;
        padding: 2% 8%;
        position: relative;

    }
    </style>

</head>

<?php include('./includes/nav.php') ?>


<!--banner section-->
<section class="section_banner bg_d">

    <div class="container text-center">
        <div class="section_banner_details text-center">

            <h4>DONATIONS<span style='opacity:.4'>/</span> Creating <span class='meadow'>Life.</span></h4>
            <h5>Powered by <span class='meadow'> TIM MEADOWS</span></h5>
        </div>

    </div>



</section>
<!--end-->
<div class="payment">
    <div class="container">
        <div class="method " id='p_msg'>

        </div>
    </div>
</div>


<!--proof-->

<div class="form shadow">
    <?php

include('includes/connect.php');
                    if (isset($_POST['upload'])) {
                                        
                    $email = $_POST['email'];
                    $file = $_FILES["file"]["name"];
                    $tempnamefile = $_FILES["file"]["tmp_name"];
                    $folder = "proofs/" . $file;


                    $error = array();

                    if (empty($email)) {
                    $error['verify'] = 'Email is required';
                    }elseif (empty($file)) {
                    $error['verify'] = 'Proof of donations is required';
                    }

                    if (count($error) == 0) {
                        $sql = "INSERT INTO `proof` (Files, email, Stats, DatePaid)
                                        VALUES (?,?,?,?);";
                                    //preparing a prepared statement

                    $stmt = mysqli_stmt_init($conn);
                   
                    $date =date("jS M Y H:i:s"); 
                   
                    $stats = 'pending';
                  

                   mysqli_stmt_prepare($stmt, $sql);
                   
                  mysqli_stmt_bind_param($stmt, 'ssss', $file, $email, $stats,$date);
                  mysqli_stmt_execute($stmt);
                  

                  move_uploaded_file($tempnamefile, $folder); 
               
                    
                  mysqli_stmt_close($stmt);

                echo ' <script>
                function hide(){
                   var error = document.getElementById("error").style.display="none";
                }
                setTimeout("hide()", 3000)
                </script>
                
                <div style="top:1%; left:0%; position:absolute; width:100%" id="error">
                <h6 class="alert alert-success text-dark" >Thank You for your donations, A confirmation mail will be sent</h6></div>';
                }
                }


                if (isset($error['verify'])) {
                    $er = $error['verify'];
                    $display = ' <script>
                    function hide(){
                    var error = document.getElementById("error").style.display="none";
                    }
                    setTimeout("hide()", 3000)
                    </script>
                    
                    <div style="top:1%; left:0%; position:absolute; width:100%" id="error">
                    <h6 class="alert alert-danger" >'.$er.'</h6></div>';

                }else{
                    $display = '';
                }

                echo $display;

                ?>
    <div id="msg"></div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="passport" style="font-size:14px; font-weight:bold;">Upload Proof of donation</label>
                <input type="file" name='file' class="form-control" style="padding:2% 0%" id='proof' />
            </div>

            <div class="form-group">
                <label for="payment" style="font-size:14px; font-weight:bold;">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email..." id='email'
                    required />
            </div>
            <button type='submit' id='submit' class='btn btn-info' name='upload'>Upload</button>
        </form>

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

</script>
</body>

</html>