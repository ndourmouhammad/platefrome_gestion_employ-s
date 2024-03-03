<?php
require('header.php');
$message = 'Données insérées avec succès';
$message_info = 'Veuillez remplir les deux cages';
?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Créer un employé</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($_POST['name']) && (!empty($_POST['email']))) : ?>
                <div class="alert alert-success">
                    <?php echo $message; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info">
                    <?php echo $message_info; ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div class="form-group mt-3">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-info">Ajouter un employé</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require('footer.php'); ?>