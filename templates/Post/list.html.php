<?php $title = 'Liste des article'; ?>
<?php ob_start(); ?>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">CESI BLOG</h1>
        <p class="lead my-3">Ce blog vous présentera les tendances actuelles des langages de programmation, ainsi que de nombreuses astuces dans tous les langages</p>
    </div>
</div>


<!-- PAGINATION -->
<?php if($maxPost > 0) { ?>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php
            // Bouton Précédent
            $disable = "";
            if($numeroPage == 1) { $disable = "disabled";}
            $numeroPagePrecedent = $numeroPage - 1;
            ?>
            <li class="page-item <?= $disable ?>">
                <a class="page-link" href="/Post/List/<?= $numeroPagePrecedent ?>" tabindex="-1">Précédent</a>
            </li>

            <?php

            // boucle numéro de page
            for($i=1;$i <= $maxPage; $i++){
                $active ="";
                if($numeroPage == $i) {$active="active"; }
                ?>
                <li class="page-item <?= $active ?>"><a class="page-link" href="/Post/List/<?= $i ?>"><?= $i ?></a></li>
            <?php } ?>

            <?php
            // Bouton Suivant
            $disable = "";
            if($numeroPage == $maxPage) {$disable = "disabled";}
            $numeroPageSuivant = $numeroPage + 1;
            ?>
            <li class="page-item <?= $disable ?>">
                <a class="page-link" href="/Post/List/<?= $numeroPageSuivant ?>" tabindex="-1">Suivant</a>
            </li>
    </nav>
<?php } ?>

<!-- LISTE DSE ARTICLES -->
<div class="row mb-2">
    <?php
    foreach ($dataPosts as $post){
    ?>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"><?= $post->getAuteur() ?></strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="/Post/Detail/<?= $post->getId() ?>"><?= $post->getTitre() ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?= $post->getDateAjout()->format("d/m/Y") ?></div>
                    <p class="card-text mb-auto"><?= $post->firstXwords(20) ?></p>
                    <a href="/Post/Detail/<?= $post->getId() ?>">Continuer la lecture</a>
                </div>
                <?php
                if(file_exists('./uploads/images/'.$post->getImageRepository().'/'.$post->getImageFileName()) AND $post->getImageFileName() != "") {
                ?>
                    <img src="/uploads/images/<?=$post->getImageRepository()?>/<?=$post->getImageFileName()?>" class="img-thumbnail" style="width: 200px; height: 250px;"/>
                <?php
                }else{
                ?>
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b8dc97f7f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b8dc97f7f%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                <?php
                }
                ?>
            </div>
        </div>
    <?php
        }
    ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.html.php'); ?>