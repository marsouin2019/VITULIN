<?php
    require_once 'include/connect.php';
    include 'include/functions.php';

    session_start();

    if (!isset($_SESSION['panier'])){
        $_SESSION['panier'] = [
            'id'      => [],
            'libelle' => [],
            'montant' => [],
            'qte'     => []
        ];
    }

    // Ajout dans le panier et redirection
    if(isset($_GET['id']) && !empty($_GET['id'])) {

        $idJeu = (int) $_GET['id'];

        $select = $bdd->prepare('SELECT * FROM jeux WHERE id = :id');
        $select->bindValue(':id', $idJeu, PDO::PARAM_INT);
        if($select->execute()) {
            $jeu = $select->fetch(PDO::FETCH_ASSOC);

            // Mise à jour de la Qté
            $count = 0;
            foreach($_SESSION['panier']['id'] as $key => $value) {
                if($idJeu == $value){
                    $_SESSION['panier']['qte'][$key]++;
                    break;
                }
                $count++;
            }
            if($count == count($_SESSION['panier']['id'])){

                $_SESSION['panier']['id'][] = $idJeu;
                $_SESSION['panier']['libelle'][] = $jeu['libelle'];
                $_SESSION['panier']['montant'][] = calculTTC($jeu['tarifHT'], $jeu['tva']);
                $_SESSION['panier']['qte'][] = 1;
            }

            header('location:index.php');
            die;
        }
    }


    $post = [];
    $errors = [];

    if(!empty($_POST['existant-submit'])){
        // nettoyage des données
        foreach ($_POST as $key => $value)
            $post[$key] = trim(strip_tags($value));

        // gestion des erreurs
        if(empty($post['email']) || filter_var($post['email'], FILTER_VALIDATE_EMAIL) == false)
            $errors[] = 'L\'adresse email doit être au bon format';

        if(empty($post['mdp']))
            $errors[] = 'Le champ Mot de Passe est vide.';


        if(count($errors) !== 0) {
            $errorsText = '<strong>Erreurs :</strong><br>';
            $errorsText .= implode('<br>', $errors);
        }

        // données valides
        else {            
            $res = $bdd->prepare('SELECT * FROM users WHERE email = :dataEmail LIMIT 1');
            $res->bindValue(':dataEmail', $post['email']);

            if($res->execute()) {
                
                $user = $res->fetch(PDO::FETCH_ASSOC);

                if(!empty($user) && password_verify($post['mdp'], $user['mdp'])) {

                    $idClient = (int) $user['id'];

                    $insertOrder = $bdd->prepare('INSERT INTO orders (products, id_client, date_create) VALUES(:dataProducts, :dataIdClient, NOW())');
                    $insertOrder->bindValue(':dataProducts', implode(';', $_SESSION['panier']['libelle']));
                    $insertOrder->bindValue(':dataIdClient', $idClient);

                    if($insertOrder->execute()){
                        $successText = 'La commande a été traité';
                    }
                    else {               
                        var_dump($insertUser->errorInfo());
                        die;
                    }
                }
                else
                    $errorsText = 'L\'email et/ou le mot de passe sont erronés';
            } 

            // erreur de dev
            else {               
                var_dump($res->errorInfo());
                die;
            }
        }

    }
    elseif(!empty($_POST['nouveau-submit'])){
        // nettoyage des données
        $post = array_map('trim', array_map('strip_tags', $_POST));
        
        // gestion des erreurs
        if(empty($post['nom']))
            $errors[] = 'Le champ Nom est vide.';
        
        if(empty($post['prenom']))
            $errors[] = 'Le champ Prénom est vide.';

        if(empty($post['mdp']))
            $errors[] = 'Le champ Mot de Passe est vide.';

        if(empty($post['email']) || filter_var($post['email'], FILTER_VALIDATE_EMAIL) == false)
            $errors[] = 'L\'adresse email doit être au bon format';

        if(!preg_match("/[0-9]{10}/", $post['phone']))
            $errors[] = 'Le numéro de téléphone doit comporter uniquement 10 chiffres';

        if(empty($post['adresse']))
            $errors[] = 'Le champ Adresse est vide.';

        if(empty($post['postal']))
            $errors[] = 'Le champ Code postal est vide.';

        if(empty($post['ville']))
            $errors[] = 'Le champ Ville est vide.';

        if(count($errors) !== 0) {
            $errorsText = '<strong>Erreurs :</strong><br>';
            $errorsText .= implode('<br>', $errors);
        }

        // données valides
        else {
            $insertUser = $bdd->prepare('INSERT INTO users (nom, prenom, mdp, email, phone, adresse, postal, ville) VALUES(:dataNom, :dataPrenom, :dataMdp, :dataEmail, :dataPhone, :dataAdresse, :dataPostal, :dataVille)');

            $insertUser->bindValue(':dataNom', $post['nom']);
            $insertUser->bindValue(':dataPrenom', $post['prenom']);
            $insertUser->bindValue(':dataEmail', $post['email']);
            $insertUser->bindValue(':dataMdp', password_hash($post['mdp'], PASSWORD_DEFAULT));
            $insertUser->bindValue(':dataPhone', $post['phone']);
            $insertUser->bindValue(':dataAdresse', $post['adresse']);
            $insertUser->bindValue(':dataPostal', $post['postal']);
            $insertUser->bindValue(':dataVille', $post['ville']);

            if($insertUser->execute()) {

                $idClient = (int) $bdd->lastInsertId();

                $insertOrder = $bdd->prepare('INSERT INTO orders (products, id_client, date_create) VALUES(:dataProducts, :dataIdClient, NOW())');
                $insertOrder->bindValue(':dataProducts', implode(';', $_SESSION['panier']['libelle']));
                $insertOrder->bindValue(':dataIdClient', $idClient);

                if($insertOrder->execute()){
                    $successText = 'La commande a été traité';
                }
                else {               
                    var_dump($insertUser->errorInfo());
                    die;
                }
            }
            // erreur de dev
            else {               
                var_dump($insertUser->errorInfo());
                die;
            }
        }
    }
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
        <h1>Panier</h1>

        <?php if(count($_SESSION['panier']['id']) === 0) : ?>
        <p>Aucun jeu dans le panier.</p>
        <?php else : ?>
        
        <table>
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Montant</th>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=0; $i < count($_SESSION['panier']['id']); $i++) : ?>
                    <tr>
                        <td><?=$_SESSION['panier']['libelle'][$i]; ?></td>
                        <td><?=$_SESSION['panier']['montant'][$i]; ?> &euro;</td>
                        <td><?=$_SESSION['panier']['qte'][$i]; ?></td>
                    </tr>
                <?php endfor; ?>
                    <tr class="total">
                        <td><strong>TOTAL</strong></td>
                        <td><strong><?=calculTotal($_SESSION['panier']['montant']) ?> &euro;</strong></td>
                    </tr>
            </tbody>
        </table>

        <p><a href="commande.php">Valider la commande</a></p>
    <?php endif; ?>

    <p><a href="index.php">Retour</a></p>

</body>
</html>