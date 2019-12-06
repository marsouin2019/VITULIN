<?php
    require_once 'include/connect.php';

    $post = [];
    $errors = [];
    $uploadDir = 'uploads';
    $extensionsValides = ['image/jpg', 'image/jpeg', 'image/gif', 'image/pjpeg', 'image/png'];
    $maxSize = 1048576*2;

    if(!empty($_POST)){
        // nettoyage des données
        foreach ($_POST as $key => $value)
            $post[$key] = trim(strip_tags($value));

        // gestion des erreurs
        // if(strlen($post['title']) < 5 || strlen($post['title']) > 50)
        if(!preg_match("/^.{5,50}$/", $post['title']))
            $errors[] = 'Le Libellé doit avoir minimum 5 et au maximum 50 caractères.';
        
        // if(strlen($post['description']) < 20)
        if(!preg_match("/^.{20,}$/", $post['description']))
            $errors[] = 'La description doit avoir minimum 20 caractères.';

        // if(strlen($post['reference']) < 5 || strlen($post['reference']) > 50)
        if(!preg_match("/^.{5,50}$/", $post['reference']))
            $errors[] = 'Le Référence doit avoir minimum 5 et au maximum 50 caractères.';

        // if(empty($post['price']) || !is_numeric($post['price']))
        if(!preg_match("/^(?:0|[1-9]\d*)(?:[\.\,]\d{2})?$/", $post['price']))
            $errors[] = 'Le Tarif HT doit être renseigné et être un nombre.';

        // if(!isset($post['taxes']) || !is_numeric($post['taxes']))
        if(!isset($post['taxes']) || !preg_match("/^(?:0|[1-9]\d*)(?:[\.\,]\d)?$/", $post['taxes']))
            $errors[] = 'La TVA doit être sélectionnée et de type numérique';

        if ($_FILES['picture']['error'] != UPLOAD_ERR_OK)
            $errors[] = "Aucune image sélectionnée";
        else {
            $finfo = new finfo;
            if (!in_array($finfo->file($_FILES['picture']['tmp_name'], FILEINFO_MIME_TYPE),$extensionsValides)) 
                $errors[] = "Le type d'image n'est pas autorisé";

            if ($_FILES['picture']['size'] > $maxSize) 
                $errors[] = "La taille de l\'image ne doit pas excéder 2 Mo";
        }


        if(count($errors) !== 0){
            $errorsText = 'Erreurs : ';
            $errorsText .= implode('<br>', $errors);
        }

        // données valides
        else {
            if (!is_dir($uploadDir)) 
                mkdir($uploadDir, 0755);
            
            $name = uniqid('img_').'.'.pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION);
            if(!move_uploaded_file($_FILES['picture']['tmp_name'], "$uploadDir/$name"))
                $errors[] = "Erreur lors du move_uploaded_file";


            $res = $bdd->prepare('INSERT INTO jeux (libelle, description, reference, tarifHT, tva, photo) VALUES(:libelle, :description, :reference, :tarifHT, :tva, :photo)');
            $res->bindValue(':libelle', $post['title']);
            $res->bindValue(':description', $post['description']);
            $res->bindValue(':reference', $post['reference']);
            $res->bindValue(':tarifHT', $post['price']);
            $res->bindValue(':tva', $post['taxes']);
            $res->bindValue(':photo', "$uploadDir/$name");

            if($res->execute()) {
                header('location: index.php');
                die;
            }
        }
    }
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un jeu</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
<?php if(isset($errorsText)) echo '<p style="color:red">'.$errorsText.'</p>'; ?>

    <h1>Ajouter un jeu</h1>

    <form method="post" enctype="multipart/form-data">
        <p>
            <label for="title">Libellé</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="description">Description</label><br>
            <textarea name="description" id="description"></textarea>
        </p>
        <p>
            <label for="reference">Référence</label><br>
            <input type="text" name="reference" id="reference">
        </p>
        <p>
            <label for="price">Tarif HT</label><br>
            <input type="text" name="price" id="price">
        </p>
        <p>
            <label for="taxes">TVA</label><br>
            <select name="taxes" id="taxes">
                <option value="" selected disabled>-- Sélectionnez --</option>
                <option value="5.5">5.5%</option>
                <option value="10">10%</option>
                <option value="20">20%</option>
            </select>
        </p>
        <p>
            <label for="picture">Photo</label><br>
            <input type="file" name="picture" id="picture" accept="image/*">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $maxSize ?>">
        </p>
        <p><input type="submit" value="Ajouter le jeu">&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Retour</a></p>
    </form>

    

</body>
</html>