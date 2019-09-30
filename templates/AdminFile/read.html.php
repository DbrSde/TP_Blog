<?php $title = 'Lecture fichier'; ?>
<?php ob_start(); ?>

    <div class="jumbotron">
        <h1 class="display-4">Lire un fichier</h1>
        <form method="post">
            <input type="hidden" name="champMini">
            <button type="submit" class="btn btn-primary">Lire</button>
        </form>
    </div>

    <?php
    if(count($arrayDataFile) > 0){
        var_dump($arrayDataFile);
    }

    ?>


<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.admin.html.php'); ?>