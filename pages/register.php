<?php
require_once ('/wamp64/www/function/functions.php');
require_once ('/wamp64/www/function/config.php');
require_once ('/wamp64/www/function/controller/RegisterController.php');
require_once ('/wamp64/www/function/controller/LoginController.php');
require_once ('../structures/header.php'); 
if (isLogged()) {
    header("Location: /pages/home");  
}
?>
<link type="text/css" rel="stylesheet" href="/assets/style.css">
<div class="container-page">
    
    <div class="container-register">
        <div class="register-form">
			<?php if(isset($_GET['login']) || empty($_GET)  && !isLogged()) : ?>
			<form role="form" class="form-register" autocomplete="off" method="POST" accept-charset="UTF-8">
				<label class="input">
                    <div class="champ"><input type="text" name="UserLog"  value="" autocomplete="off" autofocus required placeholder="Nom de compte = az"></div>
                </label>
                <label class="input">
                    <div class="champ"><input type="password" name="UserPass" maxlength="12" value="" autocomplete="off" autofocus required placeholder="Mot de Passe = az"></div>
                </label>
				<input type="submit" class="button-register" name="login" value="Se Connecter">
				 
                <a href="/pages/home">Retourner à l'accueil</a>
              <!--  <a href="?inscription">Pas de compte ? s'inscrire.</a> -->
			</form>
			
			<?php elseif(isset($_GET['inscription'])  && !isLogged()) : ?>
			<form role="form" class="form-register" autocomplete="off" method="POST" accept-charset="UTF-8">
                <label class="input">
                    <div class="champ"><input type="text" name="User" maxlength="12" value="" autocomplete="off" autofocus required placeholder="Nom de compte"></div>
                </label>
                <label class="input">
                    <div class="champ"><input type="text" maxlength="12" name="Nickname" value="" autocomplete="off" required placeholder="Pseudo"></div>
                </label>
                <label class="input">
                    <h1>Mot de passe :</h1>
                    <div class="champ"><input type="password" maxlength="16" name="Pass" autocomplete="off" required placeholder="•••••••"></div>
                </label>
                <label class="input">
                    <h1>Confirmation : </h1>
                    <div class="champ"><input type="password" maxlength="16" name="PassConfirm" autocomplete="off" required placeholder="•••••••"></div>
                </label>
                <label class="input">
                    <div class="champ"><input type="email" maxlength="20" name="Email" value="" autocomplete="off" required placeholder="Email"></div>
                </label>
                <label class="input">
                    <div class="champ"><input type="text" maxlength="64" name="Question" value="" autocomplete="off" required placeholder="Question secrète"></div>
                </label>
                <label class="input">
                    <div class="champ"><input type="text" maxlength="64" name="Answer" value="" autocomplete="off" required placeholder="Réponse secrète"></div>
                </label>
                <div>
                    <input type="submit" class="button-register" name="register" value="S'inscrire">
                </div>
                <a href="/pages/register.php">Déjà inscrit ? Se connecter</a>
			</form>	
			<?php endif ?>
		</div>
		<div class="register-right">
			
			<?php if(isset($_SESSION["ErrorMsg"])) : ?>
			<div class="alert">
				<?php if(isset($_SESSION["ErrorMsg"][0])) : ?>
                <?= $_SESSION["ErrorMsg"][0] ?>
                <?php var_dump($_SESSION) ?>
			</div>
				<?php endif ?>
			<?php endif ?> 
		</div>