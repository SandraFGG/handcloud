<?php include "utils/funciones.php";?>
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
    <p>Acomoda los siguientes numeros en forma descendiente: 80, 1, 30, 36, 2</p>
    <?php    
    $numbers = array(80, 1, 30, 36, 2);
    validaNoPar($numbers);
    ?>
</body>