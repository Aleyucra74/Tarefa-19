<?php
    print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula - 19</title>
</head>

<body>
    <form action="" method="GET">
        <div>Como conheceu o nosso site</div>
        <label for="carta">
            <input type="checkbox" name="carta" id="carta">
            Por carta
        </label>
        
        <label for="google">
            <input type="checkbox" name="google" id="google">
            Pelo Google
        </label>

        <label for="amigo">
            <input type="checkbox" name="amigo" id="amigo">
            Para amigo
        </label>
        
        <label for="outros">
            <input type="text" name="outros" id="outros">
             Por Outros
        </label>

        <button type="submit">Enviar</button>
    </form>


</body>

</html>