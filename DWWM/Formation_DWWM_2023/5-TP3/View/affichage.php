<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<!-- Démarrage de la session -->
<?php session_start();?>

<!-- Premier groupe -->
<section class='groupe1'>
    <table>
        <caption>Groupe 1</caption>

        <tr>
            <th>Place Stagiaire</th>
            <th>Nom Stagiaire</th>
        </tr>

        <?php
        for ($i=1; $i <= 4; $i++) { 
            echo "<tr><td>Place_" . $i . ': </td><td>' . $_SESSION['$listPlaceStag']['Place_' . $i] . '</td></tr>';
        }
        ?>
    </table>
</section>

<!-- Deuxième groupe -->
<section class='groupe2'>
    <table>
        <caption>Groupe 2</caption>

        <tr>
            <th>Place Stagiaire</th>
            <th>Nom Stagiaire</th>
        </tr>

        <?php
        for ($i=5; $i <= 8; $i++) { 
            echo "<tr><td>Place_" . $i . ': </td><td>' . $_SESSION['$listPlaceStag']['Place_' . $i] . '</td></tr>';
        }
        ?>
    </table>
</section>

<!-- Troisième groupe -->
<section class='groupe3'>
    <table>
        <caption>Groupe 3</caption>

        <tr>
            <th>Place Stagiaire</th>
            <th>Nom Stagiaire</th>
        </tr>

        <?php
        for ($i=9; $i <= 12; $i++) { 
            echo "<tr><td>Place_" . $i . ': </td><td>' . $_SESSION['$listPlaceStag']['Place_' . $i] . '</td></tr>';
        }
        ?>
    </table>
</section>

<!-- Quatrième groupe -->
<section class='groupe4'>
    <table>
        <caption>Groupe 4</caption>

        <tr>
            <th>Place Stagiaire</th>
            <th>Nom Stagiaire</th>
        </tr>
        
        <?php
        for ($i=13; $i <= 16; $i++) { 
            echo "<tr><td>Place_" . $i . ': </td><td>' . $_SESSION['$listPlaceStag']['Place_' . $i] . '</td></tr>';
        }
        ?>
    </table>
</section>
</body>
</html>