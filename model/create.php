<?php
require('config.php');
function creationEmploye($connection, $name, $email){
    $message = '';
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = 'insert into employe (nom, email) values (:nom, :email)';
        $statements = $connection->prepare($sql);
        if ($statements->execute([
            ':nom' => $name,
            ':email' => $email
        ])) {
            $message = 'Données insérées avec succès';
        }
    }

    return $statements;
}
