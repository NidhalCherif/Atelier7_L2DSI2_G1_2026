<?php
ob_start(); // commencer le remplissage du tampon
?>
<div class="row">
    <div class="col-5">
        <img src="<?= $produit[3] ?>" alt="image">
    </div>
    <div class="col-7">
        <H3><?= $produit[1] ?> (<?= $produit[2] ?> DT)</H3>
        <H4>Quantité en stock:<?= $produit[4] ?>"</H4>
        <h4>Date d'ajout : <?= $produit[5] ?>"</h4>

    </div>
</div>



<?php
$titre = "Détail du produit ";
$contenu = ob_get_clean(); // vider le tanpon dans une variable $contenu

include "layout.php";
?>