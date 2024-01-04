<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <?php include './app/vue/vue_navbar.php'?>
    <h1>Ajouter un utilisateur</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nom_utilisateur">Saisir le nom utilisateur</label>
        <input type="text" name="nom_utilisateur">
        <label for="prenom_utilisateur">Saisir le prenom utilisateur</label>
        <input type="text" name="prenom_utilisateur">
        <label for="mail_utilisateur">Saisir un email</label>
        <input type="text" name="mail_utilisateur">
        <label for="password_utilisateur">Saisir un mot de passe</label>
        <input type="text" name="password_utilisateur">
        <label for="verif_password_utilisateur">Confirmer le mot de passe</label>
        <input type="text" name="verif_password_utilisateur">
        <label for="image_utilisateur">Insérer une image</label>
        <input type="file" name="image_utilisateur" accept="image/png, image/jpeg"/>

        <input type="submit" value="Ajouter" name="submit">
    </form>
    <p><?=$message?></p>
</body>
</html>

<!-- // DEPLACE ET ENREGISTRE UN FICHIER DANS UN DOSSIER PERMANENT.
//move_uploaded_file($_FILES["image"]["tmp_name"], "./image/".$_FILES["image"]["name"]); -->