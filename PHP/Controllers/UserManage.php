<?php
define('ROOT_PATH', __DIR__ . '/../../');
require ROOT_PATH . 'PHP/Models/User.php'; //fixing bug direktori kontol
// include("PHP/Models/User.php");

//delete, harusnya pake method DELETE dengan hanya mengganti 'GET' menjadi 'DELETE'
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

//ubah, harusnya pake method PUT
if(isset($_POST['rstbutton'])){     
    $data['username']=@$_POST['username'];
    $data['password']=@$_POST['password']; //oldpassword
    $data['newpassword']=@$_POST['newpassword'];

    // echo "Nilai Parameter 2 : " . $data['username'];
    // echo "Nilai Parameter 3 : " . $data['password'];
    // echo "Nilai Parameter : " . $data['newpassword'];

    $usr = new User();
    $userStatus = $usr->checkAccount($data);
            // echo "Nilai Parameter 1 : " . $user['username'];
            // echo "Nilai Parameter 2 : " . $user['password'];
            // echo "Nilai Parameter 3 : " . $user['email'];
    if($userStatus == null){
        header('Location: ../../ForgotPassword.php?pesan=User tidak ditemukan');    
    } else if ($userStatus === 'password_incorrect') {
        header('Location:../../ForgotPassword.php?pesan=Password lama salah');
    } else {
        $usr->updatePassword($data);
        header('Location:../../Login.php?pesan=Reset password berhasil, silakan login');
    }
}
?>