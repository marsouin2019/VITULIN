<?php
    require_once 'include/connect.php';

    session_start();

    $res = $bdd->prepare('SELECT * FROM jeux');
    if($res->execute())
        $jeux = $res->fetchAll(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les Jeux</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <p class="liens">
        <a href="add_game.php">Ajouter un Jeu</a>&nbsp;|&nbsp;
        <a href="panier.php">Panier (<?=isset($_SESSION['panier']) ? count($_SESSION['panier']['id']) : 0 ?>)</a>
    </p>
    
    <h1>Les Jeux</h1>

<?php foreach($jeux as $jeu) : ?>
    <article>
        <img src="<?=$jeu['photo'] ?>" alt="<?=$jeu['libelle'] ?>">
        <ul>
            <li><strong>Libellé : </strong><?=$jeu['libelle'] ?></li>
            <li><strong>Description : </strong><?=$jeu['description'] ?></li>
            <li><strong>Référence : </strong><?=$jeu['reference'] ?></li>
            <li><strong>Tarif HT : </strong><?=str_replace('.',',',$jeu['tarifHT']) ?> &euro;</li>
            <li><strong>TVA : </strong><?=$jeu['tva'] ?>%</li>
            <li><a href="panier.php?id=<?=$jeu['id'] ?>">Ajouter au panier</a></li>
        </ul>        
    </article>
<?php endforeach; ?>

</body>
</html>