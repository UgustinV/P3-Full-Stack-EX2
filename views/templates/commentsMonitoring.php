<?php 
    /** 
     * Affichage de la partie monitoring : liste des articles et le nombre de commentaires pour chacunn, ainsi que le nombre de vues.
     */
?>

<h2>Commentaires de l'article "<?= $article->getTitle() ?>"</h2>

<div class="adminMonitoring">
    <?php foreach ($comments as $comment) { ?>
        <div class="articleLine">
            <div class="title"><?= $comment->getPseudo() ?></div>
            <div class="comment"><?= $comment->getContent() ?></div>
            <div class="actions">
                <a href="index.php?action=deleteComment&id=<?= $comment->getId() ?>">Supprimer</a>
            </div>
        </div>
    <?php } ?>
</div>

<a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>