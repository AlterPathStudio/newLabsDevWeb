<?php
// Ce fichier sert à communiquer avec la BD et construire les objets pour les retourner au controleur.
// Ces fonctions sont généralement appelé par le routeur (index.php) ou d'autres contrôleurs.

require_once("model/Manager.php");
require_once("model/Categorie.php");



class CategorieManager extends Manager{



    public function getCategories(){
        $db = $this->db_connect();  //Connect à la bd

        $req = $db->query('SELECT * FROM tbl_categorie ORDER BY id_categorie');         //Crée la requête

        $categories = array();   //On se crée un tableau

        while($data=$req->fetch()){                             //Va chercher une ligne à la fois dans le résultat de la requête SQL et met cette ligne dans $data
            array_push($categories, new Categorie($data));
        }

        $req->closeCursor();       //Ferme curseur de la requête et libère les ressources
        return $categories;      //Retourne le tab 

    }




}





?>