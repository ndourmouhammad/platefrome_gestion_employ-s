<?php
function updateEmploye($connection, $id)
{
    $id = $_GET['id'];
    $sql = 'select * from employe where id=:id';
    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $employes = $statement->fetch(PDO::FETCH_OBJ);

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = 'update employe set nom=:nom, email=:email where id=:id';
        $statements = $connection->prepare($sql);
        if ($statements->execute([
            ':nom' => $name,
            ':email' => $email,
            ':id' => $id
        ])) {
            header("location: index.php");
        }
    }
    return $employes;
}
