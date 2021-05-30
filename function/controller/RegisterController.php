<?php
if (isset($_POST["register"]))

{
	$date = date("Y-m-d H:i:s");
	$account = htmlentities($_POST["User"]);
	$password = htmlentities($_POST["Pass"]);
	$verifyPassowrd = htmlentities($_POST["PassConfirm"]);
	$nickname = htmlentities($_POST["Nickname"]);
	$secretQuestion = htmlentities($_POST["Question"]);
    $secretAnswer = htmlentities($_POST["Answer"]);
    $email =  htmlentities($_POST["Email"]);
	if (!empty($account) && !empty($nickname) && !empty($password) && !empty($verifyPassowrd) && !empty($secretQuestion) && !empty($secretAnswer))
	{
		if ($password !== $verifyPassowrd)
		{
			$_SESSION["ErrorMsg"][] = "Les mot de passe ne corresponde pas !";
		}
		elseif ($account === $nickname)
		{
			$_SESSION["ErrorMsg"][] = "Le nom de compte et le pseudo doivent être différent !";
		}
		elseif (mb_eregi("[^a-zA-Z0-9_-]", $account) || mb_eregi("[^a-zA-Z0-9_-]", $nickname) || mb_eregi("[^a-zA-Z0-9_-]", $password) || mb_eregi("[^a-zA-Z0-9_-]", $verifyPassowrd))
		{
			$_SESSION["ErrorMsg"][] = "Le nom d'utilisateur, pseudo et le mot de passe ne peuvent contenir que des lettres, chiffres et des tirets !";
		}
		elseif (strlen($account) < 4 || strlen($nickname) < 4)
		{
			$_SESSION["ErrorMsg"][] = "Nom de compte ou pseudo trop court ! 4 caractères minimum.";
		}
		elseif (strlen($account) > 12 || strlen($nickname) > 12)
		{
			$_SESSION["ErrorMsg"][] = "Nom de compte ou pseudo trop long ! 12 caractères maximum.";
		}
		elseif (strlen($password) > 16 || strlen($verifyPassowrd) > 16)
		{
			$_SESSION["ErrorMsg"][] = "Le mot de passe est trop long ! 16 caractères maximum.";
		}
		elseif (strlen($secretQuestion) > 64 || strlen($secretAnswer) > 64)
		{
			$_SESSION["ErrorMsg"][] = "La question ou réponse secrète est trop longue ! 64 caractères maximum.";
		}
		elseif (!accountOrNicknameAvailable($authDB, $account, $nickname))
		{
			$_SESSION["ErrorMsg"][] = "Nom de compte ou pseudo déjà utilisé !";
		}		
		else
		{
			$hashedPassword = md5($password);
			$prepare = $authDB->prepare("INSERT INTO accounts (Login, PasswordHash, Role, Nickname, Lang, Email, Tokens, NewTokens, SecretQuestion, SecretAnswer, CreationDate, IsBanned, SubscriptionEnd, VoteRpg, VoteSp) VALUES (:login, :passwordHash, :role, :nickname, :lang, :email, :tokens, :newTokens, :secretQuestion, :secretAnswer, :creationDate, :isBanned, :subscriptionEnd, :voteRpg, :voteSp)");
			$prepare->bindparam(":login", $account);
			$prepare->bindparam(":passwordHash", $hashedPassword);
			$prepare->bindValue(":role", 1);
			$prepare->bindparam(":nickname", $nickname);
			$prepare->bindValue(":lang", "fr");
			$prepare->bindValue(":email", $email);
			$prepare->bindValue(":tokens", 0);
			$prepare->bindValue(":newTokens", 0);
			$prepare->bindparam(":secretQuestion", $secretQuestion);
			$prepare->bindparam(":secretAnswer", $secretAnswer);
			$prepare->bindparam(":creationDate", $date);
			$prepare->bindValue(":isBanned", 0);
			$prepare->bindValue(":subscriptionEnd", $date);
			$prepare->bindValue(":voteRpg", 0);
			$prepare->bindValue(":voteSp", 0);
			$prepare->execute();
			session_unset();
			$_SESSION["ErrorMsg"][] = null;
			$_SESSION["ErrorMsg"][] = "Compte créé avec succès !";
		}
    }
}
?>


