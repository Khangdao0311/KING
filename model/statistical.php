<?php
function price_statistical($category_id,$category_id2){
    $sql ="SELECT * from products WHERE 1";
    if ($category_id>0) $sql .=" AND category_id = $category_id ORDER BY price_sale DESC";
    if ($category_id2>0) $sql .=" AND category_id = $category_id2 ORDER BY price_sale asc";
    return get_All($sql);
}
?>