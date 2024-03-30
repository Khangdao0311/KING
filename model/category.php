<?php
    function category_ALL() {
        $sql = "SELECT * FROM categorys";
        return get_All($sql);
    }
    function category_ONE($id) {
        $sql = "SELECT * FROM categorys WHERE id = $id";
        return get_ONE($sql);
    }
?>