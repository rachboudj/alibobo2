<?php


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
