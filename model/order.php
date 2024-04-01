<?php
    function order_SELECT($status) {
        $sql = "SELECT * FROM orders WHERE order_status = $status ORDER BY id DESC";
        return get_ALL($sql);
    }
?>