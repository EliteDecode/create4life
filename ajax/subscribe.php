<?php

include('../includes/connect.php');
include('../phpmailer/sendmail.php');

$email = $_POST['email'];


$error = array();

if (empty($email)) {
$error['verify'] = 'Email is required';
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error['verify'] = "Invalid email format";
  }

$sql = "SELECT * FROM `subscribers`";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    $edb = $row['Email'];

    if ($email == $edb) {
        $error['verify'] = 'You have an active subscription';
    }
}

if (count($error) == 0) {
    $sql = "INSERT INTO `subscribers` (Email)
                    VALUES (?);";
                   //preparing a prepared statement

                    $stmt = mysqli_stmt_init($conn);
                   

                   mysqli_stmt_prepare($stmt, $sql);
                   
                  mysqli_stmt_bind_param($stmt, 's', $email);
                  mysqli_stmt_execute($stmt);
                  
                  mysqli_stmt_close($stmt);
                  
                  $mailer = new SendMail();
                  $subject = "Create Purpose For Life";
                     
                   $message = "<div style='display: block; margin: 10px auto; width: 90%; font-family: arial; color: #223b45; text-align: center;'>
                   <img src='' />
                   <div style='background: #fafafa; border-radius: 5px; margin: 10px 0; padding: 20px;'>
                       <h3 style='font-family: arial; font-weight: 300'>Hi ". $email.",</h3>
                       <p style='font-weight: 100;'>You have successfully subscribed to Create Purpose For Life, You'll frequently get newsletter about upcoming
                        events and projects. Thanks</p>
                       <h2>Powered by TIM MEADOWS</h2>
                       
                       
                       
                   </div>
                   <h4 style='font-family: arial; font-weight: 100; text-align:center; font-size: 12px; '>Copyright &copy; <a href='https://demo.fybomidetravel.com' target='_blank'>App Name.</a> All rights reserved.</h4>
                   </div>";
                   $mailer->send_mail($email,'' ,'', $subject, $message);

                echo ' <script>
                function hide(){
                   var error = document.getElementById("error").style.display="none";
                }
                setTimeout("hide()", 3000)
                </script>
                
                <div style="top:-65%; left:2%; position:absolute; width:95%; border-radius:100px" id="error">
                <h6 class="alert alert-success" style="padding:2% 5%; font-size:13px">You have subscribed successfully</h6></div>';
}

if (isset($error['verify'])) {
    $er = $error['verify'];
    $display = ' <script>
    function hide() {
        var error = document.getElementById("error").style.display = "none";
    }
    setTimeout("hide()", 3000)
    </script>
   
    
    <div style="top:-65%; left:2%; position:absolute; width:95%" id="error; ">
    <h6 class="alert alert-danger" style="padding:2% 5%; font-size:13px">'.$er.'</h6></div>
    
    
    
   ';

 }else{
     $display = '';
 }

 echo $display;