<?php

include('../includes/connect.php');
include('../phpmailer/sendmail.php');

$id = $_POST['confirm_id'];

$sql = "UPDATE proof SET Stats = 'approved' WHERE id = $id";

$result = mysqli_query($conn,$sql);


if ($result) {
    $query = "SELECT * FROM proof WHERE id = '$id'";
    $resp = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($resp)){
      $email = $row['email'];
      

      $mailer = new SendMail();
      $subject = "Donation Recieved";
         
       $message = "<div style='display: block; margin: 10px auto; width: 90%; font-family: arial; color: #223b45; text-align: center;'>
       <img src='' />
       <div style='background: #fafafa; border-radius: 5px; margin: 10px 0; padding: 20px;'>
           <h3 style='font-family: arial; font-weight: 300'>Hi ". $email.",</h3>
           <p style='font-weight: 100;'>We are glad to have recieved such a robust donation from you. Thanks for Patnering and supporting the
           Create Life for purpose movement.</p>
           <h2>Powered by TIM MEADOWS</h2>
           
           <p style='font-weight: 100; font-size: 15px'>Please, return to the HR Department By Weekend.</p>
           <i style='color: #f0434c; font-size: 12px; font-weight: 100; line-height: 0;'>Click on the link for confirmation Details, or please ignore if you didnt apply as a Doctor.</i>
       </div>
       <h4 style='font-family: arial; font-weight: 100; text-align:center; font-size: 12px; '>Copyright &copy; <a href='https://demo.fybomidetravel.com' target='_blank'>App Name.</a> All rights reserved.</h4>
       </div>";
       $mailer->send_mail($email,'' ,'', $subject, $message);
 
 
    
        echo "<script>
        function hide(){
           var error = document.getElementById('error').style.display='none';
        }
        setTimeout('hide()', 3000)
        </script>
        
        <div style=' width:100%;position:absolute' id='error'>
        <h6 class='alert alert-success text-dark' >Payment Successfully Confirmed. An appreciation mail has been successfully sent to $email </h6></div>";
    }

}