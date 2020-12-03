<?php
    require_once "controller/connection.php" ;

    function getSubCategoriesByCateg($id) {
        $con = getConnection();
        $sql = "SELECT s.* FROM sub_categories s, categories c WHERE s.id_category = c.id AND c.id = $id";
        $result = $con->query($sql);
        while($donnees = $result->fetch(PDO::FETCH_OBJ)) {
            $data[] = $donnees;
        }
        return $data;
    }