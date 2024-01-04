<?php

    function addRoles(PDO $bdd,string $nom):void{
        try {
            $requete = $bdd->prepare('INSERT INTO roles(nom_roles) VALUE (?)');
            $requete->bindParam(1,$nom,PDO::PARAM_STR);
            $requete->execute();
        } catch (Exception $e) {
            die("Error : ".$e->getMessage());
        }
    }

    function getRolesByName(PDO $bdd,string $nom){
        try {
            $requete = $bdd->prepare('SELECT id_roles FROM roles WHERE nom_roles = ?');
            $requete->bindParam(1,$nom,PDO::PARAM_STR);
            $requete->execute();
            $data = $requete->fetch(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die("Error : ".$e->getMessage());
        }
    }

    function getAllRoles(PDO $bdd){
        try {
            $requete = $bdd->prepare('SELECT id_roles,nom_roles FROM roles');
            $requete->execute();
            $data = $requete->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die("Error : ".$e->getMessage());
        }
    }

    function updateRolesByName($bdd,$id,$nom):void{
        try {
            $requete = $bdd->prepare('UPDATE roles SET nom_roles = ? WHERE id_roles = ?');
            $requete->bindParam(1,$nom,PDO::PARAM_STR);
            $requete->bindParam(2,$id,PDO::PARAM_INT);
            $requete->execute();

        } catch (Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }

    function getRolesById(PDO $bdd,$id){
        try {
            $requete = $bdd->prepare('SELECT id_roles FROM roles WHERE id_roles = ?');
            $requete->bindParam(1,$id,PDO::PARAM_INT);
            $requete->execute();
            $data = $requete->fetch(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die("Error : ".$e->getMessage());
        }
    }

?>