<?php 
    
    function getUtilisateurByMail(PDO $bdd,$mail){
        try {
            $requete = $bdd->prepare('SELECT mail_utilisateur FROM utilisateur WHERE mail_utilisateur = ?');
            $requete->bindParam(1,$mail,PDO::PARAM_STR);
            $requete->execute();
            $data = $requete->fetch(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die("Error : ".$e->getMessage());
        }
    }

    function insertUtilisateur(PDO $bdd, $nom, $prenom, $mail, $password, $urlImage, $idRole){
        try {
            $requete = $bdd->prepare('INSERT INTO utilisateur (nom_utilisateur, prenom_utilisateur, mail_utilisateur, password_utilisateur, image_utilisateur, id_roles) VALUES(?,?,?,?,?,?)');
            $requete->bindParam(1,$nom,PDO::PARAM_STR);
            $requete->bindParam(2,$prenom,PDO::PARAM_STR);
            $requete->bindParam(3,$mail,PDO::PARAM_STR);
            $requete->bindParam(4,$password,PDO::PARAM_STR);
            $requete->bindParam(5,$urlImage,PDO::PARAM_STR);
            $requete->bindParam(6,$idRole,PDO::PARAM_INT);
            $requete->execute();
        } catch (Exception $e) {
            die("Error :".$e->getMessage());
        }
    }



?>
