<?php
ob_start(); // commencer le remplissage du tampon
?>
<form action="../controller/add.php" method="post">
    <div class="mb-3">
        <input type="text" name="libelle" placeholder="Libelle ici" class="form-control">
    </div>

    <div class="mb-3">
        <input type="text" name="prix" placeholder="prix  ici" class="form-control">
    </div>
    <div class="mb-3">
        <input type="text" name="image" placeholder="exp: https://picsum.photos/seed/hp15/400/300" class="form-control">
    </div>
    <div class="mb-3">
        <input type="text" name="qte" placeholder="Qauntité ici " class="form-control">
    </div>
    <div class="mb-3">
        Date Ajout:
        <input type="date" name="date_ajout" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" name="ok" class="btn btn-primary" value="Ajouter">
    </div>


</form>




<?php
$titre = "Ajout d'un nouveau produit ";
$contenu = ob_get_clean(); // vider le tanpon dans une variable $contenu

include "layout.php";
?>