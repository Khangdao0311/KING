<?php
    function order_SELECT($user_id,$status,$id) {
        $sql = "SELECT * FROM orders WHERE 1  ";
        if ($user_id) $sql .= " AND user_id = $user_id";
        if ($status) $sql .= " AND order_status = $status";
        if ($id) $sql .= " AND id = $id";
        // $sql .= " ORDER BY id DESC";
        return get_ALL($sql);
    }
    function order_detail_SELECT($order_id,$product_id) {
        $sql = "SELECT * FROM order_detail WHERE 1 ";
        if ($order_id) $sql .= " AND order_id = $order_id";
        if ($product_id) $sql .= " AND product_id = $product_id";
        $sql .= " ORDER BY id DESC";
        return get_ALL($sql);
    }
    function order_ADD($code, $payment_id, $voucher_id, $user_id){
        $sql = "INSERT INTO orders(code, payment_id, voucher_id, user_id) 
        VALUES ('$code', '$payment_id', '$voucher_id', '$user_id' )";
        edit($sql);
    }
    function order_detail_ADD($quantity, $order_id, $product_id){
        $sql = "INSERT INTO order_detail(quantity, order_id, product_id) 
        VALUES ('$quantity', '$order_id', '$product_id')";
        edit($sql);
    }
    function order_ONE($code){
        $sql = "SELECT * FROM orders WHERE code = $code";
        return get_ONE($sql);
    }
?>