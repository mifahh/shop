<?php
    session_start();
    // error_log(0);
    // error_reporting(0);
    include ("HTML/Head.html");
?>
    <body>
        <main>
            <section id="Login form">
                <bgformpicture>
                    <bgform>
                        <form style="display: inline-flex; flex-direction: column;" method="POST" action="PHP/Auth.php" id="logForm" name="logform">
                            <h3>Login</h3>
                            <?php if(@$_GET['pesan']!=null):
                            ?>
                                <p style="color:red;"><?=@$_GET['pesan']?></p>
                            <?php endif;
                            ?>
                            <formpicture>
                                <fillform>
                                    <label for="username">Username:</label>
                                    <input type="text" name="username" id="username" style="width: 386px; border-style: none;display: inline-flex; padding-left: 15px;padding-right: 15px;">
                                </fillform>
                                <fillform>
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password" style="width: 386px; border-style: none;display: inline-flex; padding-left: 15px;padding-right: 15px;">
                                </fillform>
                            </formpicture>
                            <div style="display: inline-flex;align-items: center;justify-content: space-between;"> 
                                <a href="Register.php">Dont have account? Register now!</a>
                                <a href="ForgotPassword.php">Forgot your Password?</a>
                            </div>
                            <div style="display: inline-flex;align-items: center;justify-content: center; padding: 25px;">
                                <button id="logbutton" name="logbutton" type="submit" style="width: 192px; height: 52px; position: relative; padding: 10px; margin: auto; background: #18A0FB; border-radius: 6px; border: none;">
                                    <text_tombol style="left: 64.03px; top: 16.30px; position: static; color:  white;">Login</text_tombol>
                                </button>
                            </div>
                            <!-- <div style="display: inline-flex;align-items: center;"> 
                                <a href="Register.html">Dont have account? Register now!</a>
                                <div id="sbtreg" name="sbtreg" type="submit" style="width: 192px; height: 52px;position: relative; margin: auto;">
                                    <a href="#sudahlogin">
                                        <tombol style="background: #18A0FB; margin: 15px;">
                                            <text_tombol style="left: 64.03px; top: 16.30px; color:  white; font-size: 17px;">Login</text_tombol>
                                        </tombol>
                                    </a>
                                </div>
                            </div> -->
                        </form>
                    </bgform>
                </bgformpicture>
            </section>
        </main>
        <script> 
            function ValidationForm() {
                let username = document.getElementById('username').value;
                let password = document.getElementById('password').value;
                
                if(username == '' || password == ''){
                    alert("Tidak boleh ada kotak yang kosong.");
                    event.preventDefault();
                    return false;
                }

                if(password.length < 8){
                    alert("Password seharusnya lebih dari 8 karakter.");
                    event.preventDefault();
                    return false;
                } 
                    return true;          
                }      
            
            logbutton.addEventListener("click", ValidationForm);      
        </script>
<?php
    include ("HTML/Footer.html");
?>