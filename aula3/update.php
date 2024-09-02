<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE user SET name='$name', email='$email' WHERE id='$id'";

    if ($conn->query($sql) === true){
        echo "Registro atualizado com sucesso!";
    }else{
        echo "Erro: $sql <br>" . $conn->error;
    }
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="post" action="update.php">
        <label for="id">ID:</label>
        <input type="text" name="id" required>
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>