<?php
    require_once "controller/connection.php" ;

    function getAllCategories() {
        $con = getConnection();
        $sql = "SELECT * FROM categories";
        $result = $con->query($sql);
        while($donnees = $result->fetch(PDO::FETCH_OBJ)) {
            $data[] = $donnees;
        }
        return $data;
    }

    function getCategoryById($id) {
        $con = getConnection();
        $sql = "SELECT * FROM categories WHERE id = $id";
        $result = $con->query($sql);

        return $result->fetch(PDO::FETCH_OBJ);
    }