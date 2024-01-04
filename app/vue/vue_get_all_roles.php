<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include './app/vue/vue_navbar.php'?>
    <h1>Liste des roles</h1>
    <?php foreach($roles as $role):?>
        <p><a href="/devcyber2/roles/update/id?id=<?=$role["id_roles"]?>"><?=$role["id_roles"]." : ".$role["nom_roles"]?></a></p>
        <?php endforeach ?>
    <p><?=$message?></p>
</body>
</html>