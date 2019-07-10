<?php
require 'vendor/autoload';

require_once('php/datos.php');
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
 <form action="index.php" method="post">

<?php
for($i = 0; $i < 16)
 echo (rand(10, 30) . "<br>");

 ?>


    </form>
</body>
</html>