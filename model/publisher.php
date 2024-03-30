<?php
    function publisher_ALL() {
        $sql = "SELECT * FROM publishers ORDER BY id DESC";
        return get_ALL($sql);
    }

    function publisher_ONE($id) {
        $sql = "SELECT * FROM publishers WHERE id = $id";
        return get_ONE($sql);
    }
    function publisher_SELECT($page,$limit) {
        $sql = "SELECT * FROM publishers WHERE 1";
        if ($page > 1){
            $begin = (($page-1) * $limit);
            $sql .="  LIMIT  $begin,$limit";
        }else {
            if ($limit > 0) $sql .=" LIMIT  $limit";
        }
        return get_All($sql);   
    }
?>