<?php

require_once './functions/autoLoad.php';
autoLoad("*.php");

<<<<<<< HEAD
require __DIR__ . 'vendor/autoload.php';
=======
require __DIR__ . '/vendor/autoload.php';
>>>>>>> e8d153eeb8fecbc334d9be6b00a3942b2c1f67e9

// Définir le fuseau horaire dans lequel le serveur se trouve
date_default_timezone_set('Europe/Paris');

/* Utiliser include ou require
* include renvoie un avertissement simple en cas d'erreur
* require renvoie une erreur fatale et arrête l'exécution du script
*/
require_once './includes/header.php';
require_once './includes/main.php';
require_once './includes/footer.php';
