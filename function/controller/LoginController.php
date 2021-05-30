<?php 

function isLogged(): bool
{
	return isset($_SESSION["Id"]) && !empty($_SESSION["Id"]);
}
function getAccountForLogin($database, $login, $password): bool
{
	$prepare = $database->prepare("SELECT COUNT(*) FROM accounts WHERE Login = :login AND PasswordHash = :password LIMIT 1");
	$prepare->bindParam(":login", $login, PDO::PARAM_STR);
	$prepare->bindParam(":password", $password, PDO::PARAM_STR);
	$prepare->execute();
	return $prepare->fetchColumn();
}


if (isset($_POST["login"]))
{
    
    $login = htmlspecialchars($_POST["UserLog"]);
    $password = htmlspecialchars(md5($_POST["UserPass"]));
    if (!empty($login) && !empty($password) && getAccountForLogin($authDB, $login, $password))
    {
		$prepare = $authDB->prepare("SELECT * FROM accounts WHERE Login = :login AND PasswordHash = :password LIMIT 1");
		$prepare->bindParam(":login", $login, PDO::PARAM_STR);
		$prepare->bindParam(":password", $password, PDO::PARAM_STR);
		$prepare->execute();
		$data = $prepare->fetch();
		if (isset($data))
		{
			$_SESSION["Id"] = $data["Id"];
			$_SESSION["Login"] = $data["Login"];
			$_SESSION["Nickname"] = $data["Nickname"];
			$_SESSION["Rank"] = $data["Role"];
			$_SESSION["LastActivity"] = time();
		}
		else
		{
			$_SESSION["ErrorMsg"][] = "Mauvais login ou mot de passe !";

		}
	}
}