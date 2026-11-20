<?php
require_once "../model/crud_produits.php";
$crud = new crud_produits();
$LesProduits = $crud->findAll(); // controller appele le modèle
//appel à la vue
include "../view/findAll_produits.php";
