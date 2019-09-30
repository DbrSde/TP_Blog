<?php $title = 'Ecriture fichier'; ?>
<?php ob_start(); ?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Ecrire dans un fichier</h1>
            <form method="post">
                <div class="form-group">
                    <label for="postDescription">Données</label>
                    <textarea class="form-control" id="postDescription" name="postDescription" rows="10"><?php echo json_encode($postData) ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ecrire</button>
            </form>
        </div>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.admin.html.php'); ?>