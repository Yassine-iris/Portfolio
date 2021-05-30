<?php
require_once ('/wamp64/www/structures/header.php');
session_unset();
session_destroy();
header("Location: /pages/home.php");  
