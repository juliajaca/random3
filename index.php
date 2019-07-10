<?php
require_once('php/datos.php');
require_once('php/randomizer.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <div class="container">
        <header>
            <h1>RandomBoiz</h1>
        </header>
    </div>
    <div class="function">
        <?php
            randomizer();
        ?>
    </div>

    </form>
</body>
</html>