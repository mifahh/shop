<?php
    session_start();
    include ("HTML/Head.html");
    include ("HTML/Header.php");
?>
    <main>
        <div style="width: -webkit-fill-available; position: relative;background: #F5F5F5;flex-direction: row;justify-content: center;align-items: flex-start;display: inline-flex">
            <gameimgpicture>
                <img style="width: auto;height: auto;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border: 1px rgba(0, 0, 0, 0.30) solid" src="image/Game Image/12.jpg">
            </gameimgpicture>
            <div style="margin: auto;">
                <gamename>FINAL FANTASY VII REMAKE INTERGRADE</gamename>
                <h3>
                    Tentang Game
                </h3>
                <gamedesc>
                    Cloud Strife, mantan agen SOLDIER, turun ke kota Midgar yang bertenaga mako. Dunia FINAL FANTASY VII klasik yang tak lekang oleh waktu terlahir kembali, menggunakan teknologi grafis mutakhir, sistem pertarungan baru, dan petualangan tambahan yang menampilkan Yuffie Kisaragi.                </gamedesc>
                <gameprice>
                    <div style="left: 64.03px;top: 15px;color: #18A0FB;font-size: 15px;position: relative;">Rp 100 000,00</div>
                    <tombol style="background: #18A0FB; margin-left: auto;">
                        <a href="#Payment">
                            <text_tombol style="left: 80px;top: 15px;color: white;">Beli</text_tombol>
                        </a>
                    </tombol>
                </gameprice>
            </div>
        </div>
    </main>
<?php
    include("HTML/Footer.html");
?>