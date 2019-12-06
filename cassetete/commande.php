<?php
    require_once 'include/connect.php';

    session_start();

    if (!isset($_SESSION['panier']['libelle']) || empty($_SESSION['panier']['libelle'])){
        header('location:panier.php');
        die;
    }

    $post = [];
    $errors = [];

    if(!empty($_POST)) {

        // nettoyage des données
        foreach ($_POST as $key => $value)
            $post[$key] = trim(strip_tags($value));

        // gestion des erreurs
        if(empty($post['email']) || filter_var($post['email'], FILTER_VALIDATE_EMAIL) == false)
            $errors[] = 'L\'adresse email saisie est invalide';

        // if(empty($post['mdp']))
        if(!preg_match("/^[a-zA-Z0-9]{6,}$/", $post['mdp']))
            $errors[] = 'Le Mot de Passe saisi doit avoir au minimum 6 lettres et/ou chiffres.';

        if(!empty($_POST['nouveau-submit'])){
            
            // if(empty($post['nom']))
            if(empty($post['nom']) || !preg_match("/^[a-zA-Z\- ]*$/", $post['nom']))
                $errors[] = 'Le Nom saisi est incorrect.';
            
            // if(empty($post['prenom']))
            if(empty($post['prenom']) || !preg_match("/^[a-zA-Z\- ]*$/", $post['prenom']))
                $errors[] = 'Le Prénom saisi est incorrect.';

            if(!preg_match("/[0-9]{10}/", $post['phone']))
                $errors[] = 'Le numéro de téléphone saisi doit comporter uniquement 10 chiffres';

            if(empty($post['adresse']))
                $errors[] = 'L\'Adresse saisie est incorrecte.';

            // if(empty($post['postal']))
            if(!preg_match("/^[0-9]{5}$/", $post['postal']))
                $errors[] = 'Le Code postal saisi doit avoir 5 chiffres.';

            if(empty($post['ville']))
                $errors[] = 'La Ville saisie est incorrecte.';
        }
        if(count($errors) !== 0) {
            $errorsText = '<strong>Erreurs :</strong><br>';
            $errorsText .= implode('<br>', $errors);
        }

        // données valides
        elseif(!empty($_POST['nouveau-submit'])) {

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
            }
        }
        elseif(!empty($_POST['existant-submit'])) {
            $res = $bdd->prepare('SELECT * FROM users WHERE email = :dataEmail LIMIT 1');
            $res->bindValue(':dataEmail', $post['email']);

            if($res->execute()) {
                    
                $user = $res->fetch(PDO::FETCH_ASSOC);

                if(!empty($user) && password_verify($post['mdp'], $user['mdp'])) {

                    $idClient = (int) $user['id'];
                }
                else
                    $errorsText = 'L\'email et/ou le mot de passe sont erronés';
            }
        }
        if(isset($idClient) && is_numeric($idClient)) {

            $insertOrder = $bdd->prepare('INSERT INTO orders (products, id_client, date_create) VALUES(:dataProducts, :dataIdClient, NOW())');
            $insertOrder->bindValue(':dataProducts', implode(';', $_SESSION['panier']['libelle']));
            $insertOrder->bindValue(':dataIdClient', $idClient);

            if($insertOrder->execute()){
                $successText = 'La commande a été traité';
                unset($_SESSION['panier']);
                header('refresh:3;url=index.php');
            }
        }
    }
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Validation de la commande</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <?php if(isset($errorsText)) echo '<p style="color:red">'.$errorsText.'</p>'; 
          if(!isset($successText)) : ?>

    <h1>Validation de la commande</h1>

    <section>
        <div class="nouveau">
            <h3>Nouveau client</h3>
            <form method="post">
                <p>
                    <label for="nom">Nom</label><br>
                    <input type="text" name="nom" id="nom" value="<?=isset($userInfos['nom']) ? $userInfos['nom'] : '' ?>">
                </p>
                <p>
                    <label for="prenom">Prénom</label><br>
                    <input type="text" name="prenom" id="prenom" value="<?=isset($userInfos['prenom']) ? $userInfos['prenom'] : '' ?>">
                </p>
                <p>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" value="<?=isset($userInfos['email']) ? $userInfos['email'] : '' ?>">
                </p>
                <p>
                    <label for="mdp">Mot de passe</label><br>
                    <input type="password" name="mdp" id="mdp">
                </p>
                <p>
                    <label for="phone">Téléphone</label><br>
                    <input type="tel" name="phone" id="phone" value="<?=isset($userInfos['phone']) ? $userInfos['phone'] : '' ?>">
                </p>
                <p>
                    <label for="adresse">Adresse</label><br>
                    <input type="text" name="adresse" id="adresse" value="<?=isset($userInfos['adresse']) ? $userInfos['adresse'] : '' ?>">
                </p>
                <p>
                    <label for="postal">Code postal</label><br>
                    <input type="text" name="postal" id="postal" value="<?=isset($userInfos['postal']) ? $userInfos['postal'] : '' ?>">
                </p>
                <p>
                    <label for="ville">Ville</label><br>
                    <input type="text" name="ville" id="ville" value="<?=isset($userInfos['ville']) ? $userInfos['ville'] : '' ?>">
                </p>
                <p><input type="submit" name="nouveau-submit" value="Valider la commande"></p>
            </form>
        </div>

        <div class="existant">
            <h3>Client existant</h3>
            <form method="post">
                <p>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" value="<?=isset($formEmail) ? $formEmail : '' ?>">
                </p>
                <p>
                    <label for="mdp">Mot de passe</label><br>
                    <input type="password" name="mdp" id="mdp">
                </p>
                <p><input type="submit" name="existant-submit" value="Connexion"></p>
            </form>    
        </div>
    </section>

    <br>
    <a href="index.php">Retour</a>

    <?php else : echo '<p style="color:green">'.$successText.'</p>'; endif; ?>

</body>
</html>