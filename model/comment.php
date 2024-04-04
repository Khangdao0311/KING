<?php
    function comment_SELECT($user_id,$product_id) {
        $sql = "SELECT * FROM comments WHERE 1";
        if ($user_id) $sql .= " AND user_id = $user_id";
        if ($product_id) $sql .= " AND product_id = $product_id";
        $sql .= " ORDER BY id DESC";
        return get_All($sql);
    }
    function comment_ADD($content,$rating,$user_id,$product_id) {
        $sql = "INSERT INTO comments(content,rating,user_id,product_id)
                VALUE('$content','$rating','$user_id','$product_id')";
        edit($sql);
    }
?>