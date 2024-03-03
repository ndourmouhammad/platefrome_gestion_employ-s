<?php
require('./model/read.php');

function ListeEmploye($connection)
{
    $employes = afficherEmploye($connection);
    include('./view/read.php');
}
