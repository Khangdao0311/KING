<?php
    function category_ALL() {
        $sql = "SELECT * FROM categorys";
        return get_All($sql);
    }
    
    function category_ONE($id) {
        $sql = "SELECT * FROM categorys WHERE id = $id";
        return get_ONE($sql);
    }
    function category_SELECT($page,$view,$hot,$search,$category_id,$limit) {
        $sql = "SELECT * FROM categorys WHERE 1";
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
    function category_add($name,$image,$describle){
        $sql = "INSERT INTO categorys(name,image,describle)
        Value ('$name','$image','$describle')"; 
        return edit($sql);
    }
    function category_detele($id){
        $sql = "DELETE FROM categorys WHERE id =$id";
        return edit($sql);
    }
    function category_edit($name,$image,$describle,$id){
        $sql = "UPDATE categorys SET name = '$name' , image = '$image' , describle = '$describle' WHERE id=$id";
        return edit($sql);
    }
    function category_updation_date($id){
        $sql = "UPDATE categorys SET updation_date = current_timestamp() WHERE id = $id";
        return edit($sql);
    }
?>