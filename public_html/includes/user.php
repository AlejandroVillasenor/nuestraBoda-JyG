<?php
include_once 'db.php';

class User extends DB{
    public function userExist($user, $pass){
        $md5pass = md5($pass);
        $query = $this->conectar()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->conectar()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach($query as $currentUser){
            $this->username = $currentUser['username'];
        }
    }
    //https://www.youtube.com/watch?v=Tb-_cEAsp4s&t=1295s
}


?>