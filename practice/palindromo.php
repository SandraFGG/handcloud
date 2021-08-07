<?php include "utils/funciones.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <h1>Sandra Fabiola Gonzalez Garcia </h1>
    <?php echo "<br>";
    echo "<br>";
    ?>
    <p>Escribe una frase y descubre si es palindromo</p>
    <form action= "palindromo.php" method="post">
        <input type="text" id="campo" name="campo" placeholder="Frase" />
        <input type="submit" value="Validar" />
    </form>
    <?php
    if (!empty($_POST['campo'])){validaPalindromo();}
    ?>

</body>

</html>