<?php


?>
	<h1>Login</h1>
	<form action="" method="post" class="wrap2" novalidate>
        	<label for="nom">Nom :</label>
        	<input type="text" name="nom" id="nom" value="<?php if(!empty($_POST['nom>
        	<span class="error"><?php if(!empty($errors['nom'])) { echo $errors['nom'>

        	<label for="prenom">Prénom :</label>
        	<input type="text" name="prenom" id="prenom" value="<?php if(!empty($_POS>
        	<span class="error"><?php if(!empty($errors['prenom'])) { echo $errors['p>

        	<label for="email">E-mail :</label>
        	<input type="email" name="email" id="email" value="<?php if(!empty($_POST>
        	<span class="error"><?php if(!empty($errors['email'])) { echo $errors['em>
        	<input type="submit" name="submitted" value="Ajouter un utilisateur">
	</form>

