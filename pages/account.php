
<?php 
require_once ('/wamp64/www/function/functions.php');
require_once ('/wamp64/www/function/config.php');
require_once ('/wamp64/www/function/controller/LoginController.php');
require_once ('/wamp64/www/function/controller/AccountController.php'); 
require_once ('/wamp64/www/function/controller/VoteController.php'); 
require_once ('/wamp64/www/function/controller/ChangePasswordController.php'); 
$position = 1?>

<link type="text/css" rel="stylesheet" href="/assets/style.css">
<script src="https://kit.fontawesome.com/3c8bcbcff2.js" crossorigin="anonymous"></script>
<div class="container-page">
    <div class="container-account">
        <div class="head-account">
        <span class="ak-icon-big ak-character"></span>
            <h1>Bienvenue sur votre compte <?= $_SESSION['Nickname'] ?></h1>
            <div class="head-right">
                <a href="/pages/home"><i class="fas fa-home"></i>ACCEUIL</a>
                <a id="deco" href="/pages/logout"><i class="fas fa-sign-out-alt"></i>SE Déconnecter</a>
            </div>
        </div>
        <div class="content-account">
        <?php foreach(getInfoAccounts($authDB, $_SESSION['Id']) as $account) : ?>
            <table class="account">
                 <tr>
                    <td class="o"><i class="fas fa-id-badge"></i>Pseudo</td>
                    <td class="z"><?= $account['Pseudo'] ?></td>
                </tr>
                <tr>
                    <td class="o"><i class="fas fa-at"></i>Email</td>
                    <td class="z"><?= $account['Mail'] ?></td>
                </tr>
                <tr>
                    <td class="o"><i class="fas fa-question"></i>Question Secrète</td>
                    <td class="z"><?= $account['SecretQuestion'] ?></td>
                </tr>
                <tr>
                    <td class="o"><i class="fas fa-calendar-week"></i>Date de création</td>
                    <td class="z"><?= $account['Date'] ?></td>
                </tr>
                <tr>
                    <td class="o"><i class="fas fa-calendar-week"></i>Dernier Vote</td>
                    <td class="z"><?= $account['LastVote'] ?></td>
                </tr>
                <tr>
                    <td class="o"><i class="fas fa-calculator"></i>Nombre de Vote</td>
                    <td class="z"><?= $account['Vote'] ?></td>
                </tr>
                <tr>
                    <td class="o"><i class="fas fa-sign-in-alt"></i>Dernière Connexion</td>
                    <td class="z"><?= $account['LastConnection'] ?></td>
                </tr>
                <tr>
                    <td class="o"><i class="fas fa-user-slash"></i>Banni</td>
                    <td class="z"><?= isBanned($account['Ban']) ?></td>
                </tr>
        
               <?php if(!empty($account['LastConnexion'])) : ?>
                <?php foreach(getTokensAccounts($gameDB, $_SESSION['Id']) as $account) : ?>
                <tr>
                    <td class="o"><i class="fas fa-user-slash"></i>Jetons</td>
                    <td class="z"><?= $account["Tokens"] ?></td>
                </tr>
                <?php endforeach ?>
                <?php endif ?>
                <?php endforeach ?>
            </table>
        <?php if(isset($_GET['vote']) || empty($_GET)) :?>
			<div class="vote">
                <?php if(userCanVote(getUserInformations($authDB, $_SESSION["Id"]))) :?>
                    <h1>Voté pour Leikyz</h1>
                    <a id="openRpg" href="#" class="bttn" onclick="javascript:open_infos();">Voter sur RPG</a>
                    <form id="formVote" method="POST">
                        <input autocomplete="off" required type="text" maxlength="16" name="outValue" autocomplete="off" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        <button type="submit" name="submitVote" class="default dbig"> <span>Voter</span></button>
                    </form>
                <script>
                document.getElementById("formVote").hidden = true;
                function open_infos()
                    {
                        window.open("<?= $rpgVote ?>");
                        setTimeout(function(){
                            document.getElementById("formVote").hidden = false;
                            $("#openRpg").fadeOut(3000);
                            $("#formVote").fadeIn(8000);
                        }, 8000);
                    }
                </script>
                <h2><?php if(isset($error)) {echo $error; }?></h2>
                <?php else : ?>
                <h3>Vous avez déjà voter sur RPG Paradize</h2>
                <h3>Prochain vote dans : <?= userNextVote(getUserInformations($authDB, $_SESSION["Id"])) ?></h2>
                <?php endif ?>
                <?php if(empty($API_call)) : ?>
                <a id="vote" href="https://serveur-prive.net/dofus/abraca-2-51-semi-unlike-5520/vote">Votez sur Serveur privé</a>
                <form class="formVote" method="post" action="">
                <button type="submit" name="vote" > <span>Voter</span></button>
                </form>
                <?php else : ?>
                <h2>Vous avez déjà voter sur SERVEUR PRIVER</h2>
                <?php endif ?>
               
            </div>
        <?php endif ?>
        <?php if(isset($_GET['changer-mdp'])) :?>
            <form class="form-change" method="POST" accept-charset="UTF-8" autocomplete="off">
                <h1>Changer mon mot de passe</h1>
                <div class="form-group ">
					<label class="control-label" for="inputPasswordOld">Mot de passe actuel</label>
					<input class="form-control"  autocomplete="off" name="inputPasswordOld" placeholder="•••••••" id="inputPasswordOld" required="required" type="password">
				</div>
				<div class="form-group ">
					<label class="control-label" for="inputSecretAnswer">Réponse secrète</label>
					<input class="form-control"  autocomplete="off" name="inputSecretAnswer" placeholder="Réponse secrète" id="inputSecretAnswer" required="required" type="text">
				</div>
				<div class="form-group ">
					<label class="control-label" for="inputPassword">Nouveau mot de passe</label>
					<input class="form-control"  autocomplete="off" name="inputPassword" placeholder="•••••••" id="inputPassword" required="required" type="password">
				</div>
				<div class="form-group ">
				    <label class="control-label" for="inputPasswordConfirmation">Confirmation</label>
					<input class="form-control" tabindex="1" autocomplete="off" name="inputPasswordConfirmation" placeholder="•••••••" id="inputPasswordConfirmation" required="required" type="password">
				</div>
                <input role="button" class="btn" name="savePassword" value="Changer de mot de passe" type="submit">
                <h2><?php if(isset($_SESSION['ErrorMsgChange'][0])) { echo $_SESSION['ErrorMsgChange'][0]; }?></h2>
            </form>
        <?php endif ?>
        <?php if(isset($_GET['perso'])) :?>
            <div class="accounts-char">
                <h1>Mes Personnages</h1>
                <table class="ladder">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th class="p">Personnage</th>
                        <th>Classe</th>
                        <th>Niveau</th>
                        <th>XP Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach(getCharactersByAccount($authDB, $_SESSION['Id'], $gameDB) as $characters) : ?>
                    <tr class="char-ladder">
                        <td class="rank">
                            <span><?= $position++; ?></span>
                        </td>
                        <td class="name">
                            <span id="photoacc"><?= getLookCharacters($characters['Look'])?></span>
                            <span><?= $characters['Name']; ?></span>
                        </td>
                        <td class="race">
                            <span><?= $characters['RaceName']; ?></span>
                        </td>
                        <td class="level">
                            <span><?= $characters['Honor']; ?></span>
                        </td>
                        <td class="experience">
                            <span><?= $characters['Connected']; ?></span>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        <?php endif ?>
            <div class="choice-account">
                <a href="?changer-mdp">Changer le mot de passe</a>
                <a href="?vote">Voter</a>
                <a href="#">Boutique</a>
                <a href="?support">Support</a>
                <a href="?perso">Mes personnages</a>
            </div>
         
