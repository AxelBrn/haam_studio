<?php
    require_once "controller/connection.php" ;

    function getProductsByCateg($id) {
        $con = getConnection();
        $sql = "SELECT p.* FROM products p, sub_categories s, categories c
                WHERE p.id_sub_category = s.id AND s.id_category = c.id AND c.id = $id";
        $result = $con->query($sql);
        while($donnees = $result->fetch(PDO::FETCH_OBJ)) {
            $data[] = $donnees;
        }
        return $data;
    }