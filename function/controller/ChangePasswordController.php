<?php 

if(isset($_POST['savePassword'])) {
    $accountId = $_SESSION["Id"];
    $oldPassword = htmlspecialchars($_POST["inputPasswordOld"]);
    $newPassword = htmlspecialchars($_POST["inputPassword"]);
    $newPasswordConfirm = htmlspecialchars($_POST["inputPasswordConfirmation"]);
    $oldHashedPassword = md5($oldPassword);
    $hashedPassword = md5($newPassword);
    if (!empty($oldPassword) && !empty($newPassword) && !empty($newPasswordConfirm))
    {
        
        if (mb_eregi("[^a-zA-Z0-9_-]", $oldPassword) || mb_eregi("[^a-zA-Z0-9_-]", $newPassword) || mb_eregi("[^a-zA-Z0-9_-]", $newPasswordConfirm))
        {
            $_SESSION["ErrorMsgChange"][] = "Les champs doivent uniquement contenir des lettres, des chiffres et des tirets !";
        }
        if ($newPassword !== $newPasswordConfirm)
        {
            $_SESSION["ErrorMsgChange"][] = "Les mots de passe ne correspondent pas !";
        }
        if ($oldPassword === $newPassword)
        {
            $_SESSION["ErrorMsgChange"][] = "Le nouveau mot de passe doit être différent de l’ancien !";
        }
        if (strlen($newPassword) < 6 || strlen($newPasswordConfirm) < 6 )
        {
            $_SESSION["ErrorMsgChange"][] = "Le mot de passe est trop court ! 6 caractères minimum.";
        }
        if (strlen($newPassword) > 16 || strlen($newPasswordConfirm) > 16)
        {
            $_SESSION["ErrorMsgChange"][] = "Le mot de passe est trop long ! 16 caractères maximum.";
        }
        else {
            $prepare = $authDB->prepare("UPDATE accounts SET PasswordHash = :password WHERE Id = :id");
            $prepare->bindparam(":password", $hashedPassword, PDO::PARAM_STR);
            $prepare->bindparam(":id", $accountId, PDO::PARAM_INT);
            $prepare->execute();
            $_SESSION["ErrorMsgChange"][] = null;
            $_SESSION["ErrorMsgChange"][] = "Mot de passe changer avec succès !";
            }
        }
    }

?>