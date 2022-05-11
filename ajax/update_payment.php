                <?php

                include('../includes/connect.php');
                $method = strtoupper($_POST['method']);
                $address = $_POST['address'];


                $error = array();

                if (empty($method)) {
                $error['verify'] = 'Payment Method must not be empty';
                }elseif (empty($address)) {
                $error['verify'] = 'Payment Address must not be empty';
                }

                if (count($error) == 0) {
                    $sql = "UPDATE `payment` SET Method = ?, Addres = ?";
                                    
                                //preparing a prepared statement

                                    $stmt = mysqli_stmt_init($conn);
                                mysqli_stmt_prepare($stmt, $sql);
                                
                                mysqli_stmt_bind_param($stmt, 'ss', $method, $address);
                                mysqli_stmt_execute($stmt);
                            
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