<?php
session_start();
function getNews($database, $limit): array
{
	// récupère un article pour le contenu selon l'id de l'url
	if (isset($_GET["id"])){		
		$newsId = intval(htmlspecialchars($_GET["id"]));
		$query = $database->query("SELECT * FROM news WHERE Id = $newsId");
	}	
	// recupère tout les article selon la limite fixer
	else {
		$query = $database->query("SELECT * FROM news ORDER BY Date DESC LIMIT 0, $limit");
	}
	$news = array();
    while ($data = $query->fetch())
	{
        $news[] = array(
			"Id" => intval($data["Id"]),
			"Title" => htmlspecialchars($data["Title"]), 
			"Text" => htmlspecialchars_decode($data["Text"]), 
			"Image" => ($data["Image"]), 
			"Author" => htmlspecialchars($data["Author"]),
			"Date" => date("d/m/Y", strtotime($data["Date"])),
			"Type" => htmlspecialchars($data["Type"]),
		);
    }
	return $news;
}
function accountOrNicknameAvailable($database, $login, $nickname): bool
{
	$prepare = $database->prepare("SELECT COUNT(*) FROM accounts WHERE Login = :login OR Nickname = :nickname LIMIT 1");
	$prepare->bindParam(":login", $login, PDO::PARAM_STR);
	$prepare->bindParam(":nickname", $nickname, PDO::PARAM_STR);
	$prepare->execute();
	return !$prepare->fetchColumn();
}

function getCount($database, $value, $column): int
{
	$query = $database->query("SELECT COUNT($value) FROM $column");  
    $posts = $query->fetch();                
    return $posts["COUNT(*)"];
}
?>