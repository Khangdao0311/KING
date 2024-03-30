<?php
    function category_ALL() {
        $sql = "SELECT * FROM categorys";
        return get_All($sql);
    }
    
    function category_ONE($id) {
        $sql = "SELECT * FROM categorys WHERE id = $id";
        return get_ONE($sql);
    }
    function category_SELECT($page,$limit) {
        $sql = "SELECT * FROM categorys WHERE 1";
        if ($page > 1){
            $begin = (($page-1) * $limit);
            $sql .="  LIMIT  $begin,$limit";
        }else {
            if ($limit > 0) $sql .=" LIMIT  $limit";
        }
        return get_All($sql);   
    }
?>