<?php 
require_once ('../structures/header.php');
$namePage = 'Accueil';

?>
<?php
$color = 'white';
?>
<title>Accueil</title>
<div class="container">
    <div class="banner">
        <h1>Portfolio Yassine BTS SIO </h1>
    </div>
    <div class="container-page">
        <div class="container-dl">
         <div class="info-dl">
           <b style='color: <?php echo $color; ?>;'>
               <img src="/assets/img/yassine.png" width="180" height="250"/>
               <h1>Qui Suis-Je ?</h1>
            <h2>Je me nomme Yassine Ben Hamdoune, j’ai 21 ans, je suis actuellement en seconde</h2>
            <h2>année de BTS SIO (Services Informatiques aux Organisations) option SLAM</h2>
            <h2>(Solutions Logicielles et applications métiers) à l'école IRIS à Paris (75 017)</h2>
               <h2>Vous pourrez retrouver ici mon  <a href="/assets/img/CV.png" target="_blank">CV</a> et ici mon
                   <a href="https://github.com/Yassine-iris/Projet_BTS" target="_blank">GitHub</a></h2>
               <b></b>
               <h1>Pourquoi un portfolio ?</h1>
               <h2>Ce portfolio a été mis en place pour vous présenter un aperçu de mes compétences que  </h2>
               <h2>j’ai acquises au fil de mon parcours au travers de mes différentes activités. </h2>
               <h2>Sur cet espace personnalisé vous pourrez retrouver l’intégral des travaux réalisés au cours des années.</h2>
               <h2>Mes connaissances personnelles seront également présentées afin de vous proposer un éventail plus large de mes connaissances.</h2>
               <h2>Bonne visite !</h2>
             </b>
        </div>

    </div>
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
        <br>
        <br>
        <br>
    <?php require_once ('../structures/footer.php'); ?>
</div>



