<?php
    function user_ALL() {
        $sql = "SELECT * FROM users";
        return get_All($sql);
    }
    function user_ONE($id) {
        $sql = "SELECT * FROM users WHERE id = $id";
        return get_ONE($sql);
    }
    function user_ADD($name,$email,$username,$pass) {
        $sql = "INSERT INTO users(name,email,username,password) 
                VALUES ('$name','$email','$username','$pass')";
        return Edit($sql);
    }
    function user_UPDATE($email,$new_password) {
        $sql = "UPDATE users SET password = '$new_password' WHERE email like '$email'";
        return Edit($sql);
    }
?>