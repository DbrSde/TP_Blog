<?php $title = 'Liste des article'; ?>
<?php ob_start(); ?>

<div class="jumbotron">
    <h1 class="display-4">Liste des articles</h1>
    <form name="recherche" method="POST" class="form-inline my-2 my-lg-0">
        <div class="col-2">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-8"></div>
        <div class="col-2"><a class="btn btn-primary" href="/Adminpost/Add">Ajouter</a></div>
    </form>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Date</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($dataPosts as $post){
    ?>
        <tr>
            <th scope="row"><a href="/AdminPost/View/<?= $post->getId() ?>">#<?= $post->getId() ?></a></th>
            <td><?= $post->getTitre() ?></td>
            <td><?= $post->getAuteur() ?></td>
            <td><?= $post->getDateAjout()->format("d/m/Y") ?></td>
            <td>
                <a class="btn btn-success" href="/AdminPost/View/<?= $post->getId() ?>">Voir</a>
                <a class="btn btn-warning" href="/AdminPost/Edit/<?= $post->getId() ?>">Editer</a>
                <a class="btn btn-danger" href="/AdminPost/Delete/<?= $post->getId() ?>">Supprimer</a>
            </td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/../templates/base.admin.html.php'); ?>