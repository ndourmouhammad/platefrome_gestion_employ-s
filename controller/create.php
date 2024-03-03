<?php
require('./model/create.php');

function ajouterUnEmploye($connection, $name, $email)
{
    $statements = creationEmploye($connection, $name, $email);
    include('./view/create.php');
}
