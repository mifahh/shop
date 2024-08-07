<?php
include ("User.php");

if(isset($_POST["regbutton"])!=null){
    $usr = new User($_POST['username'], $_POST['password'], $_POST['email']);
    $usr->CreateUser();
}
?>