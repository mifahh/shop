<?php
    session_start();
    include ("HTML/Head.html");
    include ("HTML/Header.php");
?>
    <main>  
        <section id="game news">
            <section id="game of the year">
                <div style="width: -webkit-fill-available;position: relative;background: #F5F5F5;flex-direction: row;justify-content: center;align-items: flex-start;display: inline-flex">
                    <gotytitle><text>Game of the Year 2022</text>
                        <gotydesc><text>
                            Game Awards 2022 telah berakhir, dan Elden Ring membawa pulang penghargaan terbesar malam itu: Game of the Year. God of War Ragnarok juga melakukannya dengan cukup baik, membawa pulang beberapa penghargaan.                            </text>
                        </gotydesc>
                    </gotytitle>
                    <gotyimgpicture>
                        <img style="width: auto;height: auto;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border: 1px rgba(0, 0, 0, 0.30) solid" src="image/Game Image/11.jpg">
                    </gotyimgpicture>
                </div>
            </section>
        </section>
        <section id="browse">
            <div style="width: -webkit-fill-available;height: -webkit-fill-available;position: relative;flex-direction: column;justify-content: center;align-items: center;display: inline-flex;margin-top: 100px;margin-bottom: 100px;">
                <div style="padding-bottom: 15px;gap: 30px; text-align: center;">
                    <h1>Cari Game</h1>
                    <h2>Banyak Game yang bisa kamu mainkan</h2>
                </div>
                <div style="display: inline-flex;">
                    <input style="width: 386px;height: 56px;background: white;border: 1px black solid;padding-left: 15px;padding-right: 15px;">
                    <a type="submit" href="#search">
                        <img style="width: 60px;padding-right: 15px;padding-left: 15px;" src="Image/Search ICON.png">
                    </a>
                </div>
                <div>
                    <gameimgpicturebrowse>
                        <img style="width: 173px; height: 76px; border: 1px rgba(0, 0, 0, 0.30) solid" src="Image/Game Image/1.jpg">
                    </gameimgpicturebrowse>
                    <gameimgpicturebrowse>
                        <img style="width: 173px; height: 76px; border: 1px rgba(0, 0, 0, 0.30) solid" src="Image/Game Image/2.jpg">
                    </gameimgpicturebrowse>
                    <gameimgpicturebrowse>
                        <img style="width: 173px; height: 76px; border: 1px rgba(0, 0, 0, 0.30) solid" src="Image/Game Image/3.jpg">
                    </gameimgpicturebrowse>
                    <gameimgpicturebrowse>
                        <img style="width: 173px; height: 76px; border: 1px rgba(0, 0, 0, 0.30) solid" src="Image/Game Image/4.jpg">
                    </gameimgpicturebrowse>
                </div>
                <div>
                    <gameimgpicturebrowse>
                        <img style="width: 173px; height: 76px; border: 1px rgba(0, 0, 0, 0.30) solid" src="Image/Game Image/5.jpg">
                    </gameimgpicturebrowse>
                    <gameimgpicturebrowse>
                        <img style="width: 173px; height: 76px; border: 1px rgba(0, 0, 0, 0.30) solid" src="Image/Game Image/6.jpg">
                    </gameimgpicturebrowse>
                    <gameimgpicturebrowse>
                        <img style="width: 173px; height: 76px; border: 1px rgba(0, 0, 0, 0.30) solid" src="Image/Game Image/7.jpg">
                    </gameimgpicturebrowse>
                    <gameimgpicturebrowse>
                        <img style="width: 173px; height: 76px; border: 1px rgba(0, 0, 0, 0.30) solid" src="Image/Game Image/8.jpg">
                    </gameimgpicturebrowse>
                </div>
            </div>
        </section>
<!-- recomendations -->
        <section id="recomendations">
            <div style="width: -webkit-fill-available; position: relative;background: #F5F5F5;flex-direction: row;justify-content: center;align-items: flex-start;display: inline-flex">
                <?php if(@$_SESSION['usr']==null):?>
                    <div style="color: rgba(0, 0, 0, 0.80);font-size: 64.08px;font-weight: 400;line-height: 89px;word-wrap: break-word;margin-top: auto;margin-bottom: auto;padding: 50px;">Looking for Recomendations?</div>
                    <a href="Login.php">
                        <tombol style="background: #18A0FB;margin-top: 125px;margin-bottom: 125px;margin-left: 10px;margin-right: 10px;">
                            <text_tombol style="left: 71.22px;top: 15.30px; color: white;">Login</text_tombol>
                        </tombol>
                    </a>
                    <a href="Register.php">
                        <tombol style="background: white;border: 1px #18A0FB solid;margin-top: 125px;margin-bottom: 125px;margin-left: 10px;margin-right: 10px;">
                            <text_tombol style="left: 64.03px; top: 16.30px; color: #18A0FB;">Register</text_tombol>
                        </tombol>
                    </a>
                <?php else:?>
                    <a href="GameDetail.php">
                    <gameimgpicture>
                        <img style="width: auto;height: auto;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border: 1px rgba(0, 0, 0, 0.30) solid" src="image/Game Image/12.jpg">
                    </gameimgpicture>
                    </a>
                    <div style="margin: auto;">
                        <a href="GameDetail.php">
                            <gamename>FINAL FANTASY VII REMAKE INTERGRADE</gamename>
                        </a>
                        <gamedesc>
                            Cloud Strife, mantan agen SOLDIER, turun ke kota Midgar yang bertenaga mako. Dunia FINAL FANTASY VII klasik yang tak lekang oleh waktu terlahir kembali, menggunakan teknologi grafis mutakhir, sistem pertarungan baru, dan petualangan tambahan yang menampilkan Yuffie Kisaragi.
                        </gamedesc>
                    </div>
                <?php endif;?>
            </div>
        </section>
<!-- recomendations -->
    </main>
<?php
    include("HTML/Footer.html");
?>