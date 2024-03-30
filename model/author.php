<?php
    function author_All() {
        $sql = "SELECT * FROM authors ORDER BY id DESC";
        return get_All($sql);
    }

        function author_ONE($id) {
        $sql = "SELECT * FROM authors WHERE id = $id";
        return get_ONE($sql);
    }
?>