<?php
    require_once "controller/connection.php" ;

    function getProductsByCateg($id) {
        $con = getConnection();
        $sql = "SELECT p.*, co.label as company FROM products p, sub_categories s, categories c, company co
                WHERE p.id_company = co.id AND  p.id_sub_category = s.id AND s.id_category = c.id AND c.id = $id";
        $result = $con->query($sql);
        while($donnees = $result->fetch(PDO::FETCH_OBJ)) {
            $data[] = $donnees;
        }
        return $data;
    }

    function getProductsBySubCateg($id) {
        $con = getConnection();
        $sql = "SELECT p.*, c.label as company FROM products p, company c 
                WHERE p.id_company = c.id AND p.id_sub_category = $id";
        $result = $con->query($sql);
        while($donnees = $result->fetch(PDO::FETCH_OBJ)) {
            $data[] = $donnees;
        }
        if(isset($data)) {
            return $data;
        }
        return [];
    }