<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        spl_autoload_register(function($class_name){
            include "classes/".$class_name.".php";
        });

        $chat = new Chat;
        $chien = new Chien;
        $lapin = new Lapin;

        $animaux = array($chat, $chien, $lapin);
        foreach($animaux as $animal){
            $animal -> crier();
        }
    ?>
</body>
</html>