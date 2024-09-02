<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE user SET name='$name', email='$email' WHERE id='$id'";
    
    if ($conn -> query($sql) === true){
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o registro: $sql <br>" . $conn -> error;
    }
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
        <label for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>