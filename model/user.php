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
        $sql.= " WHERE id = $id";
        return Edit($sql);
    }
    function user_SELECT($page,$view,$hot,$search,$category_id,$limit) {
        $sql = "SELECT * FROM users WHERE 1";
        if ($category_id > 0) $sql .=" AND category_id = $category_id";
        if ($hot) $sql .=" AND noibat = $hot";
        if ($search != "") $sql .=" AND name LIKE '%$search%'";
        if ($view) {
            if (is_int($view) && $view > 0) $sql .=" AND view >= $view";
            $sql .=" ORDER BY view DESC";
        } else {
            $sql .=" ORDER BY id DESC";
        }
        if ($page > 1){
            $begin = (($page-1) * $limit);
            $sql .="  LIMIT  $begin,$limit";
        }else {
            if ($limit > 0) $sql .=" LIMIT  $limit";
        }
        return get_All($sql);   
    }
function user_add_admin($name,$image,$username,$password,$role,$email,$phone,$address){
    $sql = "INSERT INTO users (name,image,username,password,role,email,phone,address) 
    Value ('$name','$image','$username','$password','$role','$email','$phone','$address')";
    return edit($sql);
}
function user_delete($id){
    $sql = "DELETE FROM users WHERE id=$id";
    return edit($sql);
}
function user_edit($name,$image,$username,$password,$role,$email,$phone,$address,$id){
    $sql = "UPDATE users SET name='$name', image='$image', username='$username', password='$password', role='$role', email='$email', phone='$phone', address= '$address' WHERE id=$id";
    return edit($sql);
}
    function user_updation_date($id){
        $sql = "UPDATE users SET updation_date = current_timestamp() WHERE id = $id";
        return edit($sql);
    }  
?>