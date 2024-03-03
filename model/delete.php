<?php

function supprimerEmploye($connection, $id)
{
    $id = $_GET['id'];
    $sql = 'delete from employe where id=:id';
    $statement = $connection->prepare($sql);
    if ($statement->execute([':id' => $id])) {
        header("location: index.php");
    }

    return $statement;
}
