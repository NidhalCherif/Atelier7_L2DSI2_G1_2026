<?php
require_once "../model/crud_produits.php";
$crud = new crud_produits();
$id = $_GET['id'];
$produit = $crud->find($id);
include "../view/detail.php";
