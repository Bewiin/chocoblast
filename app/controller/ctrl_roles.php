<?php
    function insertRoles(PDO $bdd){
        $message ="";
        if(isset($_POST["submit"])){
            if(!empty($_POST["nom_roles"])){
                $nom = cleanInput($_POST["nom_roles"]);
                if(empty(getRolesByName($bdd,$nom))){
                    addRoles($bdd,$nom);
                    $message = "Le role ".$nom." a été ajouté";
                }else{
                    $message = "Le role ".$nom."est déjà existant.";
                }
            }else{
                $message = "Veuillez remplir le champs de formulaire.";
            }
        }
        include_once './app/vue/vue_add_roles.php';
    }
    
    function showAllRoles($bdd){
        $message = "";
        $roles = getAllRoles($bdd);
        if(!$roles){
            $message = "Il n'y a pas de roles dans la base.";
        }

        include_once './app/vue/vue_get_all_roles.php';
    }

   function updateRoles($bdd){
        $message= "";
        $id = cleanInput($_GET["id"]);
    if(empty(getRolesById($bdd,$id))){
        header('location: /devcyber2/roles/all');
    }
        if(isset($_POST["submit"])){
            if(!empty($_POST["nom_roles"])){
                $nom = cleanInput($_POST["nom_roles"]);
                if(empty(getRolesByName($bdd,$nom))){
                    updateRolesByName($bdd,$id,$nom);
                    $message = "Le role ".$nom." a été modifié";
                    header("Refresh:1; url=/devcyber2/roles/all");
                }else{
                    $message = "Le role ".$nom."est déjà existant.";
                }
            }else{
                $message = "Veuillez remplir le champs de formulaire.";
            }
        }
        include_once './app/vue/vue_update_roles.php';
}


?>