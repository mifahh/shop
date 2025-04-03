<?php
    // error_reporting(0);
    // error_log(0)
    
    include ("PHP/Models/User.php");
    
    //register
    if(isset($_POST["regbutton"])!=null){
        $usr = new User($_POST['username'], $_POST['password'], $_POST['email']);
        $usr->CreateUser();
    }
    
    //login
    if(isset($_POST["logbutton"])!=null){
        $data['username']=$_POST['username'];
        $data['password']=$_POST['password'];
        
        // echo $usr."|".$pwd;
        $usr = new User();
        if($data['username']!=null && $data['password']!=null){        
            $user = $usr->auth($data);
            // var_dump($user);
            // echo "Nilai Parameter 1 : " . $user['id'];
            // echo "Nilai Parameter 2 : " . $user['username'];
            // echo "Nilai Parameter 3 : " . $user['password'];
            // echo "Nilai Parameter 3 : " . $user['email'];
            
            if($user!=null){
                session_start();
                $_SESSION["id"]=$user["id"];
                $_SESSION["usr"]=$user["username"];
                $_SESSION["password"]=$user["password"];
                $_SESSION["email"]=$user["email"];
                // echo "Session variables are set.";
            
                header("Location: ../Index.php");
            }else{
                header('Location: ../login.php?pesan=Login failed. username atau password salah!, silahkan coba lagi.');    
            }
        }
    }
?>