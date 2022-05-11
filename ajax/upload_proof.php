<?php

include('../includes/connect.php');

$email = $_POST['email'];

$file = ["file"]["name"];
$tempnamefile = $_POST["file"]["tmp_name"];
$folder = "../proofs/" . $file;


$error = array();

if (empty($email)) {
$error['verify'] = 'Email is required';
}elseif (empty($file)) {
$error['verify'] = 'Proof of donations is required';
}

if (count($error) == 0) {
    $sql = "INSERT INTO `proof` (Files, email)
                    VALUES (?,?);";
                   //preparing a prepared statement

                    $stmt = mysqli_stmt_init($conn);
                    $doctorid = 0;
                    $date =date("jS M Y H:i:s"); 
                   
                    $stats = 'pending';
                    $salary = 0;

                   mysqli_stmt_prepare($stmt, $sql);
                   
                  mysqli_stmt_bind_param($stmt, 'ss', $file, $email);
                  mysqli_stmt_execute($stmt);
                  

                  move_uploaded_file($tempnamefile, $folder); 
               
                    
                  mysqli_stmt_close($stmt);

                echo ' <script>
                function hide(){
                   var error = document.getElementById("error").style.display="none";
                }
                setTimeout("hide()", 3000)
                </script>
                
                <div style="top:4%; left:2%; position:absolute; width:70%" id="error">
                <h6 class="alert alert-success text-dark" >Payment Updated succesfully</h6></div>';
}

if (isset($error['verify'])) {
    $er = $error['verify'];
    $display = ' <script>
    function hide(){
       var error = document.getElementById("error").style.display="none";
    }
    setTimeout("hide()", 3000)
    </script>
    
    <div style="top:4%; left:2%; position:absolute; width:70%" id="error">
    <h6 class="alert alert-danger" >'.$er.'</h6></div>';

 }else{
     $display = '';
 }

 echo $display;