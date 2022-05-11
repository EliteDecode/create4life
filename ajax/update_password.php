<?php

include('../includes/connect.php');
$old = $_POST['old_password'];
$new = $_POST['new_password'];
$new2 = $_POST['new_password2'];

$old_password = password_hash($old, PASSWORD_DEFAULT);

$query = "SELECT * FROM `admin`";
$response = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($response);
$pwd = $row['Pwd'];



$error = array();

if (empty($old)) {
$error['verify'] = 'Whats Your Old Password?';
}elseif (empty($new)) {
$error['verify'] = 'Whats Your New Password?';
}elseif (empty($new2)) {
$error['verify'] = 'Retype Your New Password?';}
elseif (!password_verify($old, $pwd)) {
$error['verify'] = 'Old Password is wrong';}
elseif ($new != $new2) {
    $error['verify'] = 'Passwords must match';}

if (count($error) == 0) {
    $sql = "UPDATE `admin` SET Pwd = ?";
                    
                //preparing a prepared statement

                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);

                
                $new_password = password_hash($new, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, 's', $new_password);
                mysqli_stmt_execute($stmt);
            
                mysqli_stmt_close($stmt);

                echo ' <script>
                function hide(){
                   var error = document.getElementById("error").style.display="none";
                }
                setTimeout("hide()", 3000)
                </script>
                
                <div style="top:4%; left:2%; position:absolute; width:70%" id="error">
                <h6 class="alert alert-success text-dark" >Password Updated succesfully</h6></div>';
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