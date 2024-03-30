<?php
    function publisher_ONE($id) {
        $sql = "SELECT * FROM publishers WHERE id = $id";
        return get_ONE($sql);
    }
?>