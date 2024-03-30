<?php
    function publisher_ALL() {
        $sql = "SELECT * FROM publishers ORDER BY id DESC";
        return get_ALL($sql);
    }

    function publisher_ONE($id) {
        $sql = "SELECT * FROM publishers WHERE id = $id";
        return get_ONE($sql);
    }
?>