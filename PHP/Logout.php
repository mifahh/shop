<?php
session_start();
// unset($_SESSION['usr']);
session_unset();
session_destroy();
header('Location:../Login.php?pesan=logout berhasil');
?>