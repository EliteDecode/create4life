                        <?php

                        session_start();

                        include('../includes/connect.php');
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $error = array();

                        if (empty($username)) {
                          $error['verify'] = 'Username must not be empty';
                        }elseif (empty($password)) {
                          $error['verify'] = 'Password must not be empty';
                        }

                                if (count($error)==0) {
                                    $query = "SELECT * FROM `admin` WHERE Username = '".$username."'";
                                    $result = mysqli_query($conn, $query);
                                   

                                if (mysqli_num_rows($result) == 1) {
                                    $row = mysqli_fetch_array($result);
                                    $pwd = $row['Pwd'];
                                    if (password_verify($password,$pwd)) {
                                        $_SESSION['admin'] = $username;
                                        echo "./admin.php";
                                    }else{
                                        echo '
                                        <script>
                                        function hide() {
                                            var error = document.getElementById("error").style.display = "none";
                                        }
                                        setTimeout("hide()", 3000)
                                        </script>

                                        <div style="top:3%; width:75%; position:absolute;" id="error">
                                            <h6 class="alert alert-danger">Admin Record not found</h6>
                                        </div>';
                                    }
                                  
                                        
                               }else{
                                        echo '
                                            <script>
                                            function hide() {
                                                var error = document.getElementById("error").style.display = "none";
                                            }
                                            setTimeout("hide()", 3000)
                                            </script>

                                            <div style="top:3%; width:75%; position:absolute;" id="error">
                                                <h6 class="alert alert-danger">Admin Record not found</h6>
                                            </div>';
                                    }
                                    
                              }

                      




                        if (isset($error['verify'])) {
                        $er = $error['verify'];
                        $display = ' <script>
                        function hide() {
                            var error = document.getElementById("error").style.display = "none";
                        }
                        setTimeout("hide()", 3000)
                        </script>

                        <div style="top:3%; width:75%; position:absolute;" id="error">
                            <h6 class="alert alert-danger">'.$er.'</h6>
                        </div>';

                        }else{
                        $display = '';
                        }

                        echo $display;