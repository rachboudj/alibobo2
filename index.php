<?php

session_start();

// Fonction permettant le chargement automatique des classes
spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});
require_once './functions/autoLoad.php';
autoLoad("*.php");


$bindArray = array(
    "nom" => array("DUCON", PDO::PARAM_STR),
    "prenom" => array("Michel", PDO::PARAM_STR), 
    "email" => array("michel@groscon.com", PDO::PARAM_STR), 
    "role" => array("client", PDO::PARAM_STR)
);

$toto = new Sql();
$requeteTest = "INSERT INTO utilisateurs (nom, prenom, email, role) VALUES (:nom, :prenom, :email, :role)";

if ($toto->inserer($requeteTest, true, $bindArray)) 
    echo "Wesh t'es dans la BDD";
else
    echo "Môrche pô";



require __DIR__ . '/vendor/autoload.php';

// Définir le fuseau horaire dans lequel le serveur se trouve
date_default_timezone_set('Europe/Paris');

/* Utiliser include ou require
* include renvoie un avertissement simple en cas d'erreur
* require renvoie une erreur fatale et arrête l'exécution du script
*/

if (verifierAdmin()) 
    require_once './includes/headerAdmin.php';
else 
    require_once './includes/header.php';

require_once './includes/main.php';
require_once './includes/footer.php';
