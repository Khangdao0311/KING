<?php
    function voucher_SELECT($user_id) {
        $sql = "SELECT * FROM vouchers WHERE user_id IS NULL OR user_id = $user_id";
        return get_All($sql);
    }
    function voucher_add($code,$price,$start_date,$end_date,$quantity,$user_id){
        $sql = "INSERT INTO vouchers(code,price,start_date,end_date,quantity,user_id)
        Value ('$code','$price','$start_date','$end_date','$quantity','$user_id')";
        return edit($sql);
    }
    function voucher_delete($id){
        $sql = "DELETE FROM vouchers WHERE id=$id";
        return edit($sql);
    }
    function voucher_ONE($id){
        $sql = "SELECT * FROM vouchers WHERE id=$id";
        return get_ONE($sql);
    }
    function voucher_eidt($code,$price,$start_date,$end_date,$quantity,$user_id,$id){
        $sql = "UPDATE vouchers SET code='$code', price='$price', start_date = '$start_date', end_date='$end_date', quantity='$quantity' ";
        if ($user_id) $sql .= " ,user_id='$user_id'";
        $sql .=" WHERE id=$id";
        return edit($sql);
    }
    function voucher_updation_date($id){
        $sql = "UPDATE vouchers SET updation_date = current_timestamp() WHERE id = $id";
        return edit($sql);
    }  
    function voucher_SELECT_ALL($page,$search,$limit) {
        $sql = "SELECT * FROM vouchers WHERE quantity > 0";
        if ($search != "") $sql .=" AND code LIKE '%$search%'";
        if ($page > 1){
            $begin = (($page-1) * $limit);
            $sql .="  LIMIT  $begin,$limit";
        }else {
            if ($limit > 0) $sql .=" LIMIT  $limit";
        }
        return get_All($sql);   
    }
?>