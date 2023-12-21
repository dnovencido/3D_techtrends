<?php
    require "db/db.php";

    function get_categories() {
        global $conn;
        $categories = [];

        $query = "SELECT * FROM `categories`";

        if ($result = $conn->query($query)) {
            $categories = $result->fetch_all(MYSQLI_ASSOC);
        }

        return $categories;
    }
?>