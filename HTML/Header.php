
<body>
    <header>
        <nav>
            <div style="width: 100%; height: 100%; position: relative; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); flex-direction: row; justify-content: space-between; align-items: flex-start; display: inline-flex;">
                <?php if(@$_SESSION['usr']==null):?>
                    <icon style="margin-right: 900px; margin-left: 15px;">
                        <a href="Index.php">
                            <img src="Image/ICON.png"></img>
                            <text_icon style="width: 181.05px; left: 50px;top: 15px;bottom: 15px;position: absolute;text-align: center;">Game Store</text_icon>
                        </a>
                    </icon>
                    <div style="width: 260px; height: 40px; position: relative; display: inline-flex;">
                        <a href="Login.php">
                            <nav_tombol style="background: white;border: 1px #18A0FB solid;margin: 10px;">
                                <nav_text_tombol style="left: 45px; color: #18A0FB;">Login</nav_text_tombol>
                            </nav_tombol>
                        </a>
                        <a href="Register.php">
                            <nav_tombol style="background: #18A0FB; margin: 10px;">
                                <nav_text_tombol style="left: 37px; color: white;">Register</div>
                            </nav_tombol>
                        </a>
                    </div>  
                <?php else:?>
                    <icon style="margin-right: 900px; margin-left: 15px;">
                        <a href="Index.php">
                            <img src="Image/ICON.png"></img>
                            <text_icon style="width: 181.05px; left: 50px;top: 15px;bottom: 15px;position: absolute;text-align: center;">Game Store</text_icon>
                        </a>
                    </icon>
                    <div style="width: 510px; height: 40px; position: relative; padding: 10px; flex-direction: row; display: inline-flex;">
                        <icon>
                            <a href="#library">
                                <img src="Image/Game Library.png">
                                <text_icon style="width: 181.05px;left: 50px;top: 12px;bottom: 15px;position: absolute;text-align: center;">Game Library</text_icon>
                            </a>
                        </icon>
                        <icon style="width: 150px;top: 5px;">
                            <a href="PHP/logout.php">
                                <img src="Image/log-out.png">
                                <text_icon style="width: 100px;left: 50px;top: 7px;bottom: 15px;position: absolute;color: red;/* text-align: center; */">Log out</text_icon>
                            </a>
                        </icon>
                        <!-- <div style="width: 260px; height: 40px; display: inline-flex;">
                            <a href="PHP/logout.php">
                                <nav_tombol style="background: white;border: 1px red solid;margin: 10px;">
                                    <nav_text_tombol style="left: 37px; color: red;">Log Out</nav_text_tombol>
                                </nav_tombol>
                            </a>
                        </div>   -->
                    </div>
                <?php endif;?>
            </div>
        </nav>
    </header>