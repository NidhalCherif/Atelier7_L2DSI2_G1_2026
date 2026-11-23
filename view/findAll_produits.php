<?php
ob_start(); // commencer le remplissage du tampon
?>
<div class="text-end m-2">
    <a href="../controller/add.php" class="btn btn-primary">Ajout d'un nouveau produit</a>
</div>
<table class="table">
    <tr class="table-active">
        <th>Identifiant</th>
        <th>Libellé</th>
        <th>date d'ajout</th>
        <th colspan=3>Action</th>

    </tr>
    <?php
    foreach ($LesProduits as $produit) {
    ?>
        <tr>
            <td><?= $produit[0] ?></td>
            <td><?= $produit[1] ?></td>
            <td><?= $produit[5] ?></td>
            <td><a href="../controller/detail.php?id=<?= $produit[0] ?>">Voir détail...</a></td>
            <td><a href="../controller/update.php?id=<?= $produit[0] ?>">Editer</a></td>
            <td><a href="../controller/delete.php?id=<?= $produit[0] ?>">Supprimer</a></td>


        </tr>

    <?php
    }
    ?>

</table>
<?php
$contenu = ob_get_clean(); // vider le tanpon dans une variable $contenu
$titre = "Liste des produits";
include "layout.php";
?>