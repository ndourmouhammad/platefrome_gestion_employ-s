<?php require('header.php'); ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Modifier</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($message)) : ?>
                <div class="alert alert-success">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div class="form-group mt-3">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?= $employes->nom ?>">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $employes->email ?>">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-info">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require('footer.php'); ?>
