<?php
include("PHP/Models/User.php");

//delete
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    // $id = @$_GET['id'];
    $id = @$_SESSION["idusr"];
    // echo "Nilai Parameter : " . $id;
    $user = new User();
    if($user->deleteUser($id)){
        header('Location: ../Login.php?pesan=Hapus akun berhasil');
    }else{
        echo 'Error';
    }
}

//ubah
if(isset($_POST['rstbutton'])){     
    $data['username']=@$_POST['username'];
    $data['password']=@$_POST['password'];
    $data['newpassword']=@$_POST['newpassword'];

    // echo "Nilai Parameter 2 : " . $data['username'];
    // echo "Nilai Parameter 3 : " . $data['password'];
    // echo "Nilai Parameter : " . $data['newpassword'];

    $usr = new User();
    $user = $usr->checkAccount($data);
            // echo "Nilai Parameter 1 : " . $user['username'];
            // echo "Nilai Parameter 2 : " . $user['password'];
            // echo "Nilai Parameter 3 : " . $user['email'];
    if($user!=null){
        // echo "Nilai Parameter 3 : " . $data['newpassword'];
        $usr->updatePassword($data);
        header('Location:../Login.php?pesan=Reset password berhasil, Silahkan Login');
    }else{
        header('Location: ../ForgotPassword.php?pesan=User tidak ditemukan');    
    }   
}
?>