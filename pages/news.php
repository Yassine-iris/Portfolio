<?php require_once ('../structures/header.php'); ?>
<?php
$color = 'white';
?>
<!--  -->
<div class="container-page">
    <div class="container-dl">
        <div class="top-dl">
           <div class="info-dl">
            <h1>Mes projets</h1>
               <b style='color: <?php echo $color; ?>;'>
            <h3>Ici vous trouverez tous les projets que j'ai pu faire</h3></b>
            
        </div>
            
            <div class="choice-dl">
                <div class="client">
                    <button class="buttonDownload" type="submit" onclick="javascript:open_info();">
                        <a href="/ppe/stage.php"><img src="/assets/img/stage.png" width="250" height="200"/></a> </button>
                    
                    <a>Mettez moi</a>
                </div>
                <div class="client" id="border">
                    <button class="buttonDownload"><a href="/ppe/forum.php"><img src="/assets/img/forum.png" width="180" height="200"/></a> </button>
                    
                    <a>Une bonne</a>
                </div>
                <p> </p>
                <div class="client" id="border">
                    <button class="buttonDownload"><a href="/ppe/ppe1.php"><img src="/assets/img/ppe.png" width="180" height="200"/></a> </button>
                    
                    <a>Note svp !!</a>
                </div>
            </div>
        </div>

    </div>
    </div>
<?php require_once ('../structures/footer.php'); ?>