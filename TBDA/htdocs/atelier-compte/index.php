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
    
        $CompteCourantAlex = new CompteCourant("BOUCHER", "Alex", 1000000000, -1000000000);

        $CompteEpargneAlex = new CompteEpargne("BOUCHER", "Alex", 69, 42);


        $CompteCourantAlex -> getSolde();
        $CompteCourantAlex -> getTitulaire();
        $CompteCourantAlex -> debiter(5);
        $CompteCourantAlex -> crediter(69);

        echo "<br>";
        
        $CompteEpargneAlex -> getSolde();
        $CompteEpargneAlex -> getTitulaire();
        $CompteEpargneAlex -> debiter(5);
        $CompteEpargneAlex -> crediter(69);
    ?>
</body>
</html>