<?php
    function gallery_ALL($id) {
        $sql = "SELECT * FROM gallerys WHERE product_id = $id";
        return get_ALL($sql);
    }
?>