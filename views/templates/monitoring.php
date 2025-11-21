<?php 
    /** 
     * Affichage de la partie monitoring : liste des articles et le nombre de commentaires pour chacunn, ainsi que le nombre de vues.
     */
?>

<h2>Statistiques des articles</h2>

<div class="adminMonitoring">
    <div class="monitoringHeader">
        <?php
            $newOrder = ($order === 'DESC') ? 'ASC' : 'DESC';
        ?>
        <a href="index.php?action=monitoring&sorting=title&order=<?= $sorting === 'title' ? $newOrder : 'DESC' ?>"><div>Titre<?= ($sorting === 'title') ? (($order === 'DESC') ? "<img src='images/sort-bt.svg' alt='desc'/>" : "<img src='images/sort-tb.svg' alt='asc'/>") : "" ?></div></a>
        <a href="index.php?action=monitoring&sorting=vues&order=<?= $sorting === 'vues' ? $newOrder : 'DESC' ?>"><div>Vues<?= ($sorting === 'vues') ? (($order === 'DESC') ? "<img src='images/sort-bt.svg' alt='desc'/>" : "<img src='images/sort-tb.svg' alt='asc'/>") : "" ?></div></a>
        <a href="index.php?action=monitoring&sorting=comments_count&order=<?= $sorting === 'comments_count' ? $newOrder : 'DESC' ?>"><div>Commentaires<?= ($sorting === 'comments_count') ? (($order === 'DESC') ? "<img src='images/sort-bt.svg' alt='desc'/>" : "<img src='images/sort-tb.svg' alt='asc'/>") : "" ?></div></a>
        <a href="index.php?action=monitoring&sorting=date_creation&order=<?= $sorting === 'date_creation' ? $newOrder : 'DESC' ?>"><div>Date de création<?= ($sorting === 'date_creation') ? (($order === 'DESC') ? "<img src='images/sort-bt.svg' alt='desc'/>" : "<img src='images/sort-tb.svg' alt='asc'/>") : "" ?></div></a>
    </div>
    <?php foreach ($articles as $article) { ?>
        <div class="articleLine">
            <div class="title"><?= $article->getTitle() ?></div>
            <div class="content"><?= $article->getVues() ?></div>
            <div class="content"><?= $article->getCommentsCount() ?> <a href="index.php?action=showEditComment&id=<?= $article->getId() ?>">Editer</a></div>
            <div class="content"><?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></div>
        </div>
    <?php } ?>
</div>

<a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>