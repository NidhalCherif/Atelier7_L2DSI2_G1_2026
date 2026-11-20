<?php
require_once "../config.php";
include_once "produits.php";
class crud_produits
{
    private $pdo; // un objet pdo
    public function __construct()
    {
        $obj = new config(); // etablir la connexion 
        $this->pdo = $obj->getConnexion();
    }
    function findAll()
    {
        //2 formuler la requete
        $sql = "select * from produits";
        //3 envoi de la requete select
        $res = $this->pdo->query($sql); // PDOstatement/false

        //transformer le resultat en tableau php
        $LesProduits = $res->fetchAll(PDO::FETCH_NUM);
        return $LesProduits;
    }
    function find($id) {}
    function add(produits $p) {}
    function delete($id) {}
    function update(produits $p) {}
}
