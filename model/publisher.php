<?php
    function publisher_ALL() {
        $sql = "SELECT * FROM publishers ORDER BY id DESC";
        return get_ALL($sql);
    }

    function publisher_ONE($id) {
        $sql = "SELECT * FROM publishers WHERE id = $id";
        return get_ONE($sql);
    }
    function publisher_SELECT($page,$view,$hot,$search,$category_id,$limit) {
        $sql = "SELECT * FROM publishers WHERE 1";
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
?>