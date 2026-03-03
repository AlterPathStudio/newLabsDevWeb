<?php
require('model/CategorieManager.php');

function listCategorie(){

    $categorieManager = new CategorieManager();     //Instancie un objet de type CategorieManager
    $categories = $categorieManager->getCategories();

    require("view/categoriesView.php");
}










?>
