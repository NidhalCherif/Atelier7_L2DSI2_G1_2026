<?php
require_once "../model/crud_produits.php";
$crud = new crud_produits();
if (isset($_POST['ok'])) {
    $p = new produits();
    $p->setLibelle($_POST['libelle'])
        ->setPrix($_POST['prix'])
        ->setQuantite($_POST['qte'])
        ->setImage($_POST['image'])
        ->setDate_ajout($_POST['date_ajout']);

    $res = $crud->add($p);
    if ($res) {
        header('Location:findAll_produits.php');
        exit;
    }
}

include "../view/add.php";
