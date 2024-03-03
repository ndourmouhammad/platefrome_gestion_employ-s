<?php
require('./model/delete.php');

function SuppressionEmploye($connection, $id){
    $statements =  supprimerEmploye($connection, $id);
    include('./view/read.php');
}