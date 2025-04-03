<?php
    session_start();
    include ("HTML/Head.html");
?>
    <main>
        <div style="width: -webkit-fill-available; position: relative; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); flex-direction: row; justify-content: space-between; align-items: flex-start; display: inline-flex;">
            <icon style="margin-right: 900px; margin-left: 15px;">
                <a href="Index.php">
                    <img src="Image/ICON.png"></img>
                    <text_icon style="width: 181.05px; left: 50px;top: 15px;bottom: 15px;position: absolute;text-align: center;">Game Store</text_icon>
                </a>
            </icon>
            <div style="width: 230px;height: 60px;position: relative;padding: 5px;">
                <icon>
                    <a href="UserProfile.php">
                        <img src="Image/Profile.png">
                        <text_icon style="width: 181.05px;left: 50px; bottom: 15px;position: absolute;text-align: center;">User Profile</text_icon>
                    </a>
                </icon>
            </div>
        </div>
        <div style="width: -webkit-fill-available; position: relative;background: #F5F5F5;flex-direction: row;justify-content: center;align-items: flex-start;display: inline-flex">
            <div style="background: white;display: inline-flex;justify-content: center;align-items: center;flex-direction: column;width: 622px;height: 439px;">
                <h3>Your Profile</h3>
                <div style="padding: 15px; display: inline-flex; flex-direction: column;gap: 10px;">
                    <div style="display: inline-flex;flex-direction: row;gap: 10px;">
                        <label for="username">Username :</label>
                        <text><?php echo $_SESSION["usr"]?></text>
                    </div>
                    <div style="display: inline-flex;flex-direction: row;gap: 10px;">
                        <label for="email">Email Address :</label>
                        <text><?php echo $_SESSION["email"]?></text>
                    </div>
                    <!-- <div style="display: inline-flex;flex-direction: row;gap: 10px;">
                        <label for="email">Email Address :</label>
                        <text><?php echo $_SESSION["id"]?></text>
                    </div> -->
                </div>
                <div>
                    <a href="PHP/Controllers/UserManage.php">
                        <button id="delbutton" name="delbutton" style="width: 192px; height: 52px; position: relative; padding: 10px; margin: auto; background:Red; border-radius: 6px; border: none;">
                            <text_tombol style="left: 64.03px; top: 16.30px; position: static; color:  white;">Delete Account?</text_tombol>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>
<?php
    include("HTML/Footer.html");
?>