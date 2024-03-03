<?php
function afficherEmploye($connection)
{
    $sql = 'select * from employe';

    $statement = $connection->prepare($sql);
    $statement->execute();
    $employes = $statement->fetchAll(PDO::FETCH_OBJ);

    return $employes;
}
