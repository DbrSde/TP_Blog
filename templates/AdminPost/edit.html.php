<?php $title = 'Edition de l\'article'; ?>
<?php ob_start(); ?>

    <div class="jumbotron">
        <h1 class="display-4">Modifier l'Article</h1>
        <form name="postAdd" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="postTitre">Titre</label>
                <input type="text" class="form-control" id="postTitre" name="postTitre" placeholder="titre de l'article" value="<?= $post->getTitre() ?>">
            </div>

            <div class="form-group">
                <label for="postDescription">Description</label>
                <textarea class="form-control" id="postDescription" name="postDescription" rows="3" placeholder="Description de l'article"><?= $post->getDescription() ?></textarea>
            </div>

            <div class="form-group">
                <label for="postAuteur">Auteur</label>
                <select class="form-control" id="postAuteur" name="postAuteur">
                    <option value="Brice" <?php if($post->getAuteur()=='Brice'){echo 'selected=selected';}?> >Brice</option>
                    <option value="Bruno" <?php if($post->getAuteur()=='Bruno'){echo 'selected=selected';}?> >Bruno</option>
                    <option value="Fabien" <?php if($post->getAuteur()=='Fabien'){echo 'selected=selected';}?> >Fabien</option>
                    <option value="Marion" <?php if($post->getAuteur()=='Marion'){echo 'selected=selected';}?> >Marion</option>
                </select>
            </div>
            <div class="form-group">
                <label for="postDate">Date de l'article</label>
                <input type="date" class="form-control" id="postDate" name="postDate" value="<?= $post->getDateAjout()->format('Y-m-d') ?>" >
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="postImage">fichier Image</label>
                        <input type="file" class="form-control" id="postImage" name="postImage" >
                    </div>
                </div>
                <div class="col-6">
                    <img src="/uploads/images/<?= $post->getImageRepository().'/'.$post->getImageFileName() ?>" class="img-thumbnail"/>
                </div>
            </div>
            <input type="hidden" name="postImageFull" id="postImageFull" value="<?= $post->getImageRepository().'/'.$post->getImageFileName() ?>">
            <input type="hidden" name="postId" id="postID" value="<?= $post->getId() ?>">
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.admin.html.php'); ?>