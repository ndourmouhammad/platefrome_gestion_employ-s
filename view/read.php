<?php require('header.php') ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des employés</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Adresse email</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($employes as $employe) : ?>
                    <tr>
                        <td><?= $employe->id ?></td>
                        <td><?= $employe->nom ?></td>
                        <td><?= $employe->email ?></td>
                        <td>
                            <!-- Le lien pour modifier un employé -->
                            <a href="modifier-employe_<?= $employe->id ?>.html" class="btn btn-info">Modifier</a>
                            <!-- Le lien pour supprimer un employé -->
                            <a onclick="return confirm('Confirmer la suppression')" href="supprimer-employe_<?= $employe->id ?>.html" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>
<?php require('footer.php') ?>