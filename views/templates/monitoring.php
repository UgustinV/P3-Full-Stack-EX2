<?php 
    /** 
     * Affichage de la partie monitoring : liste des articles et le nombre de commentaires pour chacunn, ainsi que le nombre de vues.
     */
?>

<h2>Statistiques des articles</h2>

<div class="adminMonitoring">
    <div class="monitoringHeader">
        <div><a href="">Titre</a><img src="" alt=""></div>
        <div><a href="">Vues</a></div>
        <div><a href="">Commentaires</a></div>
        <div><a href="">Date de création</a></div>
    </div>
    <?php foreach ($articles as $article) { ?>
        <div class="articleLine">
            <div class="title"><?= $article->getTitle() ?></div>
            <div class="content"><?= $article->getVues() ?></div>
            <div class="content"><?= $article->getCommentsCount() ?></div>
            <div class="content"><?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></div>
        </div>
    <?php } ?>
</div>

<a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>