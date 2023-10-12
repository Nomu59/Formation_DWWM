<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php echo "Voici une page sans spaghetti bolognaise, malheureusement..."; ?> -->
    <?php include("page2.php"); ?>
    <form action="page3.php" method="get">
        <label for="prenom">
            <input type="text" name="prenom" id="prenom">
        </label>
        <label for="nom">
            <input type="text" name="nom" id="nom">
        </label>
        <label for="age">
            <input type="number" name="age" id="age">
        </label>
        <input type="submit" value="Valider">
    </form>
</body>
</html>