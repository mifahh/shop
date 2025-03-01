<?php
    include ("HTML/Head.html");
?>
    <body>
        <main>
            <section id="Forgot password form">
                <bgformpicture>
                    <bgform>
                        <form style="display: inline-flex; flex-direction: column;" method="POST" action="PHP/UserManage.php" id="rstForm">
                            <h3>Reset your Password</h3>
                            <?php if(@$_GET['pesan']!=null):
                            ?>
                                <p style="color:red;"><?=@$_GET['pesan']?></p>
                            <?php endif;
                            ?>
                            <formpicture>
                                <fillform>
                                    <label for="username">Username:</label>
                                    <input type="text" name="username" id="username" placeholder="username" style="width: 386px; border-style: none;display: inline-flex; padding-left: 15px;padding-right: 15px;">
                                </fillform>
                                <fillform>
                                    <label for="password">Old Password:</label>
                                    <input type="password" name="password" id="password" placeholder="old Password" style="width: 386px; border-style: none;display: inline-flex; padding-left: 15px;padding-right: 15px;">
                                </fillform>
                                <fillform>
                                    <label for="newpassword">New Password:</label>
                                    <input type="password" name="newpassword" id="newpassword" placeholder="new Password" style="width: 386px; border-style: none;display: inline-flex; padding-left: 15px;padding-right: 15px;">
                                </fillform>
                                <fillform>
                                    <label for="confirmPassword">Confirm New Password:</label>
                                    <input type="password" name="cpassword" id="cpassword" placeholder="confirm password" style="width: 386px; border-style: none;display: inline-flex; padding-left: 15px;padding-right: 15px;">
                                </fillform>
                            </formpicture>
                            <!-- <div id="sbtreg" name="sbtreg" type="submit" style="width: 192px; height: 52px; position: relative; padding: 10px; margin: auto;">
                                <a href="Register.html">
                                    <tombol style="background: #18A0FB;">
                                        <text_tombol style="left: 64.03px; top: 16.30px; color:  white; font-size: 17px;">Register</text_tombol>
                                    </tombol>
                                </a>    
                            </div> -->
                            <button id="rstbutton" name="rstbutton" type="submit" style="width: 192px; height: 52px; position: relative; padding: 10px; margin: auto; background: #18A0FB; border-radius: 6px; border: none;">
                                <text_tombol style="left: 64.03px; top: 16.30px; position : static; color:  white;">Reset</text_tombol>
                            </button>
                        </form>
                    </bgform>
                </bgformpicture>
            </section>
        </main>
        <script>
            function ValidationForm() {
                let username = document.getElementById('username').value;
                let password = document.getElementById('oldPassword').value;
                let newpassword = document.getElementById('newPassword').value;
                let cpassword = document.getElementById('cpassword').value;
                
                if(username == '' || password == '' || newpassword == ''){
                    alert("Tidak boleh ada kotak yang kosong.");
                    event.preventDefault();
                    return false;
                }
                
                if(password.length < 8){
                    alert("Password lama seharusnya lebih dari 8 karakter.");
                    event.preventDefault();
                    return false;
                }            
                
                if(newpassword.length < 8){
                    alert("Password baru seharusnya lebih dari 8 karakter.");
                    event.preventDefault();
                    return false;
                }  

                if (newpassword !== cpassword) {
                    alert("Password baru tidak sama dengan Confirm Password.");
                    event.preventDefault();
                    return false;
                }

                return true;
            }            
            rstbutton.addEventListener("click", ValidationForm);
        </script>
<?php
    include("HTML/Footer.html");
?>