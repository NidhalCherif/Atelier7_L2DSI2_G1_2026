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
    function find($id)
    {
        //2 formuler la requete
        $sql = "select * from produits where id=" . $id;
        //3 envoi de la requete select
        $res = $this->pdo->query($sql); // PDOstatement/false

        //transformer le resultat en tableau php
        $Produit = $res->fetch(PDO::FETCH_NUM);
        return $Produit;
    }

    function delete($id)
    {
        $sql = "delete from produits where id=" . $id;
        return $this->pdo->exec($sql);
    }
    function add(produits $p)
    {
        $sql = "insert into produits values(NULL,'{$p->getLibelle()}',{$p->getPrix()},'{$p->getImage()}',
              {$p->getQuantite()},'{$p->getDate_ajout()}')";
        return $this->pdo->exec($sql);
    }
    function update(produits $p)
    {

        $sql = "update produits set libelle= '{$p->getLibelle()}',prix={$p->getPrix()},image='{$p->getImage()}',
        quantite={$p->getQuantite()},date_ajout='{$p->getDate_ajout()}' where id={$p->getId()}";
        return $this->pdo->exec($sql);
    }
}
