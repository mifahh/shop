<?php
include("User.php");

//delete
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = @$_GET['id'];
    // echo "Nilai Parameter : " . $id;
    $user = new User();
    if($user->deleteUser($id)){
        header('Location: ../ShowUser.php?pesan= hapus berhasil');
    }else{
        header('Location: ../ShowUser.php?pesan= hapus gagal');
    }
}

//ubah
if(isset($_POST['updtbutton'])){     
    $data['iduser']=@$_POST['id'];
    $data['username']=@$_POST['username'];
    $data['password']=@$_POST['password'];

    // echo "Nilai Parameter : " . $data['iduser'];
    // echo "Nilai Parameter 2 : " . $data['username'];
    // echo "Nilai Parameter 3 : " . $data['password'];

    $user = new User();
    if($user->ubah($data)){
        header('Location:../ShowUser.php?pesan=ubah berhasil');
    }else{
        echo 'Error';
    }   
}
?>