<?php
class config
{
    private $connexion; // un objet pdo
    function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=e_commerce_l2dsi2_g1";
        $username = "root";
        $pw = "";
        try {
            $this->connexion = new PDO($dsn, $username, $pw);
        } catch (PDOException $e) {
            exit("problème de connexion!!!: " . $e->getMessage());
        }
    }
    function getConnexion()
    {
        return  $this->connexion;
    }
}
