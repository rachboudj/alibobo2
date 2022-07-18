<h1>Login</h1>

<?php

if (isset($_POST['frmLogin'])) {
    $email = isset($_POST['email']) ? htmlentities(trim($_POST['email'])) : "";
    $mdp = isset($_POST['mdp']) ? htmlentities(trim($_POST['mdp'])) :  "";

    $erreurs = array();

    if (mb_strlen($email) === 0)
        array_push($erreurs, "Veuillez saisir une adresse mail");
    
    elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
        array_push($erreurs, "Veuillez saisir une adresse conforme");

    if (mb_strlen($mdp) === 0)
        array_push($erreurs, "Veuillez saisir un mot de passe");
    
    if (count($erreurs) > 0) {
        $messageErreurs = "<ul>";

        for ($i = 0 ; $i < count($erreurs) ; $i++) {
            $messageErreurs .= "<li>";
            $messageErreurs .= $erreurs[$i];
            $messageErreurs .= "</li>";
        }

        $messageErreurs .= "</ul>";

        echo $messageErreurs;

        require './includes/frmLogin.php';

    } else {

        echo "Tout est OK";
    }

} else {
    $email = "";
    require './includes/frmLogin.php';
}