<?php
    function author_ONE($id) {
        $sql = "SELECT * FROM authors WHERE id = $id";
        return get_ONE($sql);
    }
?>