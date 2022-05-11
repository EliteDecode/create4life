<?php

include('../phpmailer/sendmail.php');

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['message'];


$error = array();

if (empty($name)) {
$error['verify'] = 'Your Name is required';
}elseif (empty($email)) {
    $error['verify'] = 'Email is required';
 }elseif (empty($text)) {
        $error['verify'] = 'What is your message?';
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $error['verify'] = "Invalid email format";
 }


if (count($error) == 0) {
  
$mailer = new ReceiveMail();
$subject = "Create Purpose For Life";
   
 $message = "<div style='display: block; margin: 10px auto; width: 90%; font-family: arial; color: #223b45; text-align: center;'>
 <img src='' />
 <div style='background: #fafafa; border-radius: 5px; margin: 10px 0; padding: 20px;'>
     <h3 style='font-family: arial; font-weight: 300'>Email From ". $email.",</h3>
     <p style='font-weight: 100;'>Message: ".$text."</p>
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
    
    <div style="top:-8%; left:2%; position:absolute; width:95%; border-radius:100px" id="error">
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
   
    
    <div style="top:-8%; left:2%; position:absolute; width:95%" id="error; ">
    <h6 class="alert alert-danger" style="padding:2% 5%; font-size:13px">'.$er.'</h6></div>
    
    
    
   ';

 }else{
     $display = '';
 }

 echo $display;