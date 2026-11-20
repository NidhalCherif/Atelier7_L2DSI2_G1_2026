<?php
// 1: Etablir une  connexion
require_once "config.php";
$obj = new config(); // etablir la connexion 
$pdo = $obj->getConnexion();
//2 formuler la requete
$sql = "select * from produits";
//3 envoi de la requete select
$res = $pdo->query($sql); // PDOstatement/false

//transformer le resultat en tableau php
$LesProduits = $res->fetchAll(PDO::FETCH_NUM);

//Affichage
?>
<table border=1>
    <tr>
        <th>Identifiant</th>
        <th>Libellé</th>
        <th>Prix</th>
        <th>date d'ajout</th>
    </tr>
    <?php
    foreach ($LesProduits as $produit) {
    ?>
        <tr>
            <td><?= $produit[0] ?></td>
            <td><?= $produit[1] ?></td>
            <td><?= $produit[2] ?></td>
            <td><?= $produit[5] ?></td>
        </tr>

    <?php
    }
    ?>

</table>