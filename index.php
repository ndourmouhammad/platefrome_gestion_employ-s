<?php
require('controller/create.php');
require('controller/read.php');
require('controller/update.php');
require('controller/delete.php');

// Vérification de l'existence du paramètre 'page' dans l'URL
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'insert-employe') {
        if (empty($_POST['name']) || empty($_POST['email'])) {
            include('view/create.php');
        } else {
            ajouterUnEmploye($connection, $_POST['name'], $_POST['email']);
        }
    } elseif ($_GET['page'] == 'afficher-employes') {
        ListeEmploye($connection);
    } elseif ($_GET['page'] == 'modifier-employe') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            MiseAjour($connection, $id);
        }
    } elseif ($_GET['page'] == 'supprimer-employe') {
        SuppressionEmploye($connection, $id);
    }
} else {
    ListeEmploye($connection);
}
