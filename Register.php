<?php
    include ("HTML/Head.html");
?>
    <body>
        <main>
            <section id="Register form">
                <bgformpicture>
                    <bgform>
                        <form style="display: inline-flex; flex-direction: column;" method="POST" action="PHP/Controllers/Auth.php" id="regForm">
                            <h3>Create your Account</h3>
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
                                    <label for="email">Email Address:</label>
                                    <input type="email" name="email" id="email" placeholder="email" style="width: 386px; border-style: none;display: inline-flex; padding-left: 15px;padding-right: 15px;">
                                </fillform>
                                <fillform>
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password" placeholder="password" style="width: 386px; border-style: none;display: inline-flex; padding-left: 15px;padding-right: 15px;">
                                </fillform>
                                <fillform>
                                    <label for="confirmPassword">Confirm Password:</label>
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
                            <button id="regbutton" name="regbutton" type="submit" style="width: 192px; height: 52px; position: relative; padding: 10px; margin: auto; background: #18A0FB; border-radius: 6px; border: none;">
                                <text_tombol style="left: 64.03px; top: 16.30px; position : static; color:  white;">Register</text_tombol>
                            </button>
                        </form>
                    </bgform>
                </bgformpicture>
            </section>
        </main>
        <script>
            function ValidationForm() {
                let username = document.getElementById('username').value;
                let email = document.getElementById('email').value;
                let password = document.getElementById('password').value;
                let cpassword = document.getElementById('cpassword').value;
                
                if(username == '' || email == '' || password == ''){
                    alert("Tidak boleh ada kotak yang kosong.");
                    event.preventDefault();
                    return false;
                }
                
                var regex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-z]{2,7}$/;
                if (!regex.test(email)) {
                    alert("Tolong masukkan alamat email yang valid.");
                    event.preventDefault();
                    return false;
                }
                
                if(password.length < 8){
                    alert("Password seharusnya lebih dari 8 karakter.");
                    event.preventDefault();
                    return false;
                }            
                
                if (password !== cpassword) {
                    alert("Password tidak sama.");
                    event.preventDefault();
                    return false;
                }

                return true;
            }            
            regbutton.addEventListener("click", ValidationForm);
        </script>
<?php
    include("HTML/Footer.html");
?>
