<?php

require_once ('/wamp64/www/function/functions.php');
require_once ('/wamp64/www/function/config.php');
require_once ('/wamp64/www/function/controller/LoginController.php');
require_once ('/wamp64/www/function/controller/AccountController.php');
 ?>
<script src="https://kit.fontawesome.com/3c8bcbcff2.js" crossorigin="anonymous"></script>
<link type="text/css" rel="stylesheet" href="/assets/style.css">
<body>
    <div class="header">
    <a href="#" class="button" id="header__icon"></a>
        <div class="navbar">
            <ul>
            <li><a href="/pages/home"><i class="fas fa-home"></i>Accueil</a></li>
                <li><a href="/pages/regist"><i class="fas fa-sign-in-alt"></i>Connexion</a></li>
                <li><a href="/pages/download"><i class="fas fa-download"></i>BTS'SIO</a></li>
                <li><a href="/ppe/veilletechn"><i class="fas fa-download"></i>Veille'Technologique</a></li>
            </ul>
            <div class="right">
               
                    <div class="dropdown">
                        <button class="dropbtn"><a href="/pages/news">Mes Projets</a><i class="fas fa-arrow-up"></i></button>
                        <div class="dropdown-content">
                            <a href="/ppe/ppe1.PHP"><i class="fas fa-address-card"></i>PPE1</a>
                            <a href="/ppe/forum.php"><i class="fas fa-vote-yea"></i>Forum</a>
                            <a href="/ppe/stage.php"><i class="fas fa-users"></i>Stage</a>
                        </div>
                    </div>
                
                <a id="discord" href="#"><i class="fab fa-discord"></i>Discord</a>
            </div>    
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/scripts/main.js"></script>
