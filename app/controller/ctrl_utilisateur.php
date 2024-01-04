<?php
    
    function addUtilisateur($bdd){
        $message = "";
        
        if(isset($_POST["submit"])){
            $nom = cleanInput($_POST["nom_utilisateur"]);
            $prenom = cleanInput($_POST["prenom_utilisateur"]);
            $email = cleanInput($_POST["mail_utilisateur"]);
            $password = cleanInput($_POST["password_utilisateur"]);
            $urlImage = $_FILES["image_utilisateur"]["name"];
            move_uploaded_file($_FILES["image_utilisateur"]["tmp_name"], "./public/media/".$urlImage);
            $idRole = 1;
            if(!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($password) AND !empty($_FILES["image_utilisateur"])){
                if($password == $_POST["verif_password_utilisateur"]){
                    $hash = password_hash($password,PASSWORD_DEFAULT);
                    if(empty(getUtilisateurByMail($bdd,$email))){
                        insertUtilisateur($bdd, $nom, $prenom, $email, $hash, $urlImage, $idRole);
                        $message = "Le compte a bien été ajouté";
                    }
                    else{
                        $message = "Le compte existe déjà";
                    }
                }
            }
            else{
                $message = "Veuillez remplir tout les champs.";
            }
        }
        include_once './app/vue/vue_add_utilisateur.php';
    }


?>