<?php
require 'PHP/dbConnection.php';

class User{
    private $username;
    private $password;
    private $email;
    private $database;

    public function __construct($username=null, $password=null, $email=null){
        if($username!=null && $password!=null && $email!=null){
            $this->username=$username;
            $this->password=$password;
            $this->email=$email;
        }
        $this->database=new DbConnection();
        // var_dump($this->database);
    }

    public function CreateUser(){
        $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES (?,?,?)";
        $statement = $this->database->database->prepare($sql);
        try{
            if($statement->execute([$this->username, $this->password, $this->email])){
                header("Location: ../Login.php?pesan=Registrasi Berhasil, Silahkan Login");
            }
        }catch (PDOException $e) {
            echo "Database Error: " . $e->getMessage();
            header("Location: ../Register.php?pesan=Registrasi Gagal, Username atau Email telah digunakan");
            return false;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
        // if((checkUsrDatabase($this->username, $this->email))!=null){
        //     header("Location: ../Register.php?pesan=Registrasi Gagal, Username atau Email telah digunakan");
        // }
    }

    public function showAll(){
        $sql = "SELECT * FROM `users`";
        $statement = $this->database->database->query($sql);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function showbyid($id)
    {
        $sql = "SELECT * FROM `users` WHERE `iduser` = :id";
        $statement = $this->database->database->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }

    public function ubah($data)
    {
        $sql = "UPDATE `users` SET `username`=:username, `password`=:pswd WHERE `iduser`=:iduser";
        $statement = $this->database->database->prepare($sql);
        $statement->bindParam(':iduser', $data['iduser'],PDO::PARAM_INT);
        $statement->bindParam(':username', $data['username'],PDO::PARAM_STR);
        $statement->bindParam(':pswd', $data['password'],PDO::PARAM_STR);
        return $statement->execute();
    }

    public function updatePassword($data)
    {
        $sql = "UPDATE `users` SET `password`=:pswd WHERE `username`=:username ";
        $statement = $this->database->database->prepare($sql);
        $statement->bindParam(':username', $data['username'],PDO::PARAM_STR);
        $statement->bindParam(':pswd', $data['newpassword'],PDO::PARAM_STR);
        return $statement->execute();
    }

    // public function checkUsrDatabase($username, $email){
    //     $sql = "SELECT * FROM `users` WHERE `username`=:username  OR `email`=:email";
    //     $statement = $this->database->database->prepare($sql);
    //     $statement->bindParam(':username', $username, PDO::PARAM_STR);
    //     $statement->bindParam(':email', $email, PDO::PARAM_STR);

    //     $statement->execute();
    //     $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    //     return $result;
    // }

    public function checkAccount($data){
        $sql = "SELECT * FROM `users` WHERE `username`=:username  AND `password`=:pswd";
        $statement = $this->database->database->prepare($sql);
        $statement->bindParam(':username', $data['username'], PDO::PARAM_STR);
        $statement->bindParam(':pswd', $data['password'], PDO::PARAM_STR);

        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function deleteUser($id){
        $sql = "DELETE FROM `users` WHERE `id` = :id";

        // prepare the statement for execution
        $statement = $this->database->database->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }

    public function auth($data){
        $sql = "SELECT * FROM `users` WHERE `username`=:username  AND `password`=:pswd";
        $statement = $this->database->database->prepare($sql);
        $statement->bindParam(':username', $data['username'], PDO::PARAM_STR);
        $statement->bindParam(':pswd', $data['password'], PDO::PARAM_STR);

        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    // public function getUserbyLogin($data){
    //     $sql = "SELECT `username`, `password`, `email` FROM `users` WHERE `username`=:username  AND `password`=:pswd";
    //     $statement = $this->database->database->prepare($sql);
    //     $statement->bindParam(':username', $data['username'], PDO::PARAM_STR);
    //     $statement->bindParam(':pswd', $data['password'], PDO::PARAM_STR);

    //     if ($statement->execute()){
    //         $user = $statement->fetch(PDO::FETCH_ASSOC);
    //         var_dump($this->user);
    //         session_start();
    //         $_session["user"] = $user;
    //         // __construct_user($user, $password, $user->$

    //         header("Location: ../Dashboard.php");
    //         return $user;
    //         exit();
    //     } else {
    //         echo "<script>alert('Username atau Password Anda salah. Silakan coba lagi!')</script>";
    //         // header("Location: ../Login.php");
    //     }
    // }

    // public function getUserbyLogin($data){
    //     $sql = "SELECT username, password, email FROM `users` WHERE `username`=:username";
    //     $statement = $this->database->database->prepare($sql);
    //     $statement->bindParam(':username', $data['username'], PDO::PARAM_INT);
    //     $statement->bindParam(':password', $data['password'], PDO::PARAM_INT);

    //     $statement->bindParam(':username', $username, PDO::PARAM_STR);

    //     if ($statement->execute()){
    //         $user = $statement->fetch(PDO::FETCH_ASSOC);
    //         var_dump($this->user);
    //         if(password_verify($password, $user["password"])){
    //             session_start();
    //             $_session["user"] = $user;
    //             // __construct_user($user, $password, $user->$

    //             header("Location: ../Dashboard.php");
    //             return $user;
    //             exit();
    //         }else {
    //             echo "<script>alert('Username atau Password Anda salah. Silakan coba lagi!')</script>";
    //             // header("Location: ../Login.php");
    //         }
    //     } else {
    //         echo "<script>alert('Username atau Password Anda salah. Silakan coba lagi!')</script>";
    //         // header("Location: ../Login.php");
    //     }
    // }
}
?>