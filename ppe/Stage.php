<?php 
require_once ('../structures/header.php');
$namePage = 'accueil';

?>
<?php
$color = 'white';
?>
<title>Stage</title>
<div class="container">
    <div class="banner">
        <h1>Projet de stage</h1>

    </div> 
    <div class="container-page">
     <div class="container-dl">
         <div class="info-dl">
           <b style='color: <?php echo $color; ?>;'>


               <br><br><br><br><br><br><br><br><br><br>
               <h2>Pour mon stage j'ai du faire un site de chat en temps réel, relié à la base de donnée<h2>
                   <img src="/assets/img/chat.png" width="580"/>
                   <img src="/assets/img/pchat.png" width="580"/>
                <h2>avec inscription/connexion comme on peut le voir ci dessous</h2>
               <img src="/assets/img/incriptionV.png" width="580"/>
               <img src="/assets/img/connexionV.png" width="580"/>
            <h2>Avec ceci j'ai fais un panel admin avec un mot de passe unique qui permet de se connecter à un compte crée pour cette effet uniquement</h2>
                   <img src="/assets/img/mdpa.png" width="580"/>
                   <img src="/assets/img/paa.png" width="580"/>
            <h2>Grace à cela on peut supprimer les messages indésirable </h2>
                   <img src="/assets/img/pa.png" width="580"/>
            <h2>Les messages sont donc suprimé et le chat peut donc être controler. </h2>
              
             </b>
        </div>
    </div>
  <!--  <div class="container-news">
       <!--
        <div class="container-content-news">
            <?php foreach (getNews($websiteDB, 4) as $news) : ?>
            <div class="news">
                
                <div class="news-banner" style="background-image: url(/assets/img/news/<?=$news["Image"]?>);">
                    <div class="top">
                        <h1>Par <strong><?= $news["Author"]?></strong></h1>
                        <h1>Le <?= $news["Date"]?></h1>
                    </div>
                    <span><a href="article.php?id=<?=$news['Id']?>"><?= $news['Title'] ?><i class="fas fa-comments"></i></a></span>
                </div>
            </div>
            <?php endforeach ?>
        </div> -->
    </div> 























    <?php require_once ('../structures/footer.php'); ?>
