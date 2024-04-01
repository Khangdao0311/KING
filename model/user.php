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
    function user_UPDATE($id,$name,$image,$password,$email,$phone,$address) {
        $sql = "UPDATE users SET id = id ";
        if ($name) $sql .= " , name = '$name'";
        if ($image) $sql .= " , image = '$image'";
        if ($phone) $sql .= " , phone = '$phone'";
        if ($email) $sql .= " , email = '$email'";
        if ($address) $sql .= " , address = '$address'";
        if ($password != '') $sql .= " , password = '$password'";
        else $sql.= " WHERE id = $id";
        return Edit($sql);
    }
?>