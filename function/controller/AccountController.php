<?php 
    function getCharactersByAccount($database_auth, $id,$database_word) {
       
        foreach(getCharactersByAccountAuth($database_auth, $id) as $name) {
            $request = $database_word->query('SELECT * FROM characters WHERE Id = '.$name['CharacterId'].'');
            foreach($request as $player)
            {         
                $chars[] = [
                    "Name" => htmlentities($player["Name"], ),
                    "Look" => $player["EntityLookString"],
                    "Honor" => $player["Honor"],
                    "Connected" => getConnectedCharacter($player["Connected"]),
                    "RaceName" => getNameRace($player['Breed']),

                ];
            }
        }
     return $chars;
    }
    function getConnectedCharacter($id) {
        if ($id == 0) return "Non";
        else return "Oui";

    }
    function getCharactersByAccountAuth($database_auth, $id) {
        $query = $database_auth->query("SELECT CharacterId,AccountId FROM worlds_characters WHERE AccountId = $id");   
        while ($data = $query->fetch())
            {    
                $info[] = [
                    "CharacterId" => htmlentities($data["CharacterId"]),
                ];
            }  
        return $info; 
    }

    function isBanned($id) {
        if ($id == 0) return "Non";
        else return "Oui";
    }
    function getTokensAccounts($database, $id) {
        $query = $database->query("SELECT * FROM accounts_tokens WHERE AccountId = $id");
        while ($data = $query->fetch())
        {    
            $info[] = [
                "AccountId" => $data["AccountId"],
                "Tokens" => $data["NewTokens"],          
            ];
        }
        return $info;
    }
    
    function getInfoAccounts($database, $id) {
            $query = $database->query("SELECT * FROM accounts C WHERE C.Id = $id");
            while ($data = $query->fetch())
            {    
                $info[] = [
                    "Pseudo" => htmlentities($data["Nickname"]),
                    "Mail" => $data["Email"],
                    "SecretQuestion" => htmlentities($data["SecretQuestion"]),
                    "Date" => $data["CreationDate"],
                    "Jetons" => $data["Tokens"],
                    "LastVote" => $data["LastVote"],
                    "LastConnection" => $data["LastConnection"],
                    "Ban" => $data["IsBanned"],
                    "Vote" => $data["VoteRpg"],
                ];
            }
            if (!empty($info)) {
                return $info;
            }
        }
    function getLookCharacters($id) {
        ini_set('display_errors', 'off');
        $image = 'http://staticns.ankama.com/dofus/renderer/look/'.bin2hex($id).'/body/1/35_35-0.png';
        $imageData = base64_encode(file_get_contents($image));
        $src = 'data: '.mime_content_type($image).';base64,'.$imageData;
        echo '<img src="' . $src . '">';
    }



    
