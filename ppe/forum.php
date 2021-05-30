<?php 
require_once ('../structures/header.php');
$namePage = 'Acceuil';

?>
<?php
$color = 'white';
?>
<title>Forum</title>
<div class="container">
    <div class="banner">
        <h1>Projet Forum</h1>
    </div>
    <div class="container-page">
     <div class="container-dl">
         <div class="info-dl">
           <b style='color: <?php echo $color; ?>;'>
               <br><br><br><br><br>
               <br><br><br><br><br><br><br><br><br><br>
               <br><br><br><br><br><br><br><br><br><br>
               <h2>Pour notre forum, nous avons voulu faire un site d'entraide entre joueurs</h2>
            <h2>On a donc fait un système d'incription et de connexion comme on peut le voir</h2>
               <img src="/assets/img/ins.png" width="700"/>
               <img src="/assets/img/co.png" width="700"/>

            <h2>Une page d'accueil avec certains jeux (les plus jouer du moment) avec une zone ou discuter</h2>
            <h2>et donner des astuces/conseils pour s'améliorer. </h2>
               <img src="/assets/img/acc.png" width="700"/>
               <h2>Et pour finir on peut trouver un système de déconnexion </h2>
               <img src="/assets/img/dec.png" width="700"/>
             </b>
        </div>
    </div>
    </div><br><br><br><br><br><br><br><br><br><br>
    <?php require_once ('../structures/footer.php'); ?>
</div>

