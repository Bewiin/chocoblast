<?php
include_once './app/outils/bddConnect.php';
include_once './app/outils/utilitaire.php';
include_once './app/model/model_roles.php';
include_once './app/model/model_utilisateur.php';
include_once './app/controller/ctrl_page.php';
include_once './app/controller/ctrl_roles.php';
include_once './app/controller/ctrl_utilisateur.php';
session_start();

$url = parse_url($_SERVER['REQUEST_URI']);

$path = isset($url['path']) ? $url['path'] : '/';

switch ($path) {
    case '/devcyber2/':
        home();
        break;
    case '/devcyber2/roles/add':
        insertRoles($bdd);
        break;
    case '/devcyber2/roles/all':
        showAllRoles($bdd);
        break;
    case '/devcyber2/roles/update/id':
        updateRoles($bdd);
        break;
    case '/devcyber2/utilisateur/add':
        addUtilisateur($bdd);
        break;
    
    
    default:
        error();
        break;
}




?>