<?php $title = 'Error'; ?>
<?php ob_start(); ?>
    <div class="alert alert-danger" role="alert">
        <?= $errorMessage ?>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.html.php'); ?>