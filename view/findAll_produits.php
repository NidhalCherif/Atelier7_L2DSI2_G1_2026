<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>

<body>
    <table class="table">
        <tr class="table-active">
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

</body>

</html>