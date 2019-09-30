<?php $title = 'Detail de l\'article'; ?>
<?php ob_start(); ?>

    <div class="jumbotron">
        <h1 class="display-4">Détails de l'article</h1>
        <div class="row">
            <div class="col-6">
                <ul class="list-group">
                    <li class="list-group-item active"><?= $post->getTitre() ?></li>
                    <li class="list-group-item">Ecrit par : <?= $post->getAuteur() ?></li>
                    <li class="list-group-item">Ecrit le : <?= $post->getDateAjout()->format("d/m/Y") ?></li>
                    <li class="list-group-item"><?= nl2br($post->getDescription()) ?></li>
                </ul>
            </div>
            <div class="col-6">
                <?php
                if(file_exists('./uploads/images/'.$post->getImageRepository().'/'.$post->getImageFileName()) AND $post->getImageFileName() != "") {
                    echo '<img src="/uploads/images/'.$post->getImageRepository().'/'.$post->getImageFileName().'" class="img-thumbnail"/>';
                }
                ?>
            </div>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.admin.html.php'); ?>