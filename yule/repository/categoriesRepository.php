<?php
    require_once "controller/connection.php" ;

    function getAll() {
        $con = getConnection();
        $sql = "SELECT * FROM categories";
        $result = $con->query($sql);
        while($donnees = $result->fetch(PDO::FETCH_OBJ)) {
            $data[] = $donnees;
        }
        return $data;
    }

    function getById($id) {
        $con = getConnection();
        $sql = "SELECT * FROM categories WHERE id = $id";
        $result = $con->query($sql);

        return $result->fetch(PDO::FETCH_OBJ);
    }