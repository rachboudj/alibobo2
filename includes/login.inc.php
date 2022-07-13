<?php
if (isset($_POST['frmInscription'])) {
	$email = isset($_POST['email']) ? htmlentities(trim($_POST['email'])) : "";
	$mdp1 = isset($_POST['mdp1']) ? htmlentities(trim($_POST['mdp1'])) :  "";
	$mdp2 = isset($_POST['mdp2']) ? htmlentities(trim($_POST['mdp2'])) :  "";
	
	$errors = [];
	if (mb_strlen($email) === 0)
		array_push($errors, "Veuillez rentrer votre l'addresse email de votre compte!!");
	elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
		array_push($errors, "");
	if (mb_strlen($mdp1) === 0 || mb_strlen($mdp2) === 0)
		array_push($errors, "");

?>
	<h1>Login</h1>
	<form action="" method="post" class="wrap2" novalidate id="desinscription">
        	<label for="email">E-mail :</label>
        	<input type="email" name="email" id="email" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>">
        	<span class="error"><?php if(!empty($errors['email'])) { echo $errors['email']; } ?></span>
		
		<label for="mdp">Mot de Passe:</label>
		<input type="password" name="mdp" id="mdp" />
		<span class="error"><?php  ?></span>
		
		<input type="submit" name="submitted" value="Supprimer mon compte">
	</form>
