<?php
require('./model/update.php');

function MiseAjour($connection, $id)
{
    $employes = updateEmploye($connection, $id);
    include('./view/update.php');
    
}
