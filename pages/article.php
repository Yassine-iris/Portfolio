<?php require_once ('../structures/header.php'); ?>

<div class="container-page">
    <div class="post-container">
        <?php foreach (getNews($websiteDB, 20) as $post) : ?>
        <div class="post-left">
            <img src="/assets/img/news/<?=$post["Image"]?>?>" alt="">
        </div>
        <div class="post-content">
            <div class="post-top">
                <img src="/assets/img/little_logo.png" alt="">
                <h5><?= $post['Title']?></h5>
            </div>
            <p><?= nl2br($post['Text']) ?></p>
        </div>
        <?php endforeach ?>
    </div>
<?php require_once ('../structures/footer.php'); ?>