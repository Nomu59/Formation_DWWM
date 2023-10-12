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

        $SecteurAlex = new Secteur();
        $EmployeAlex = new Employe("BOUCHER", "Alex", "02/05/2002");
        $AdresseAlex = new Adresse(01, "Roubaix", "rue de la paix", 69, 59100);
        $VendeurAlex = new Vendeur("BOUCHER", "Alex", "02/05/2002");
        $ManutentionnaireAlex = new Manutentionnaire("BOUCHER", "Alex", "02/05/2002");
        $ProducteurAlex = new Producteur("BOUCHER", "Alex", "02/05/2002");
        $NucleaireAlex = new Nucleaire("BOUCHER", "Alex", "02/05/2002");
        $EquipementProtectionAlex = new EquipementProtection(01, "Armure de pierre", "Anti-flammes");
        $ManutentionnaireARisqueAlex = new ManutentionnaireARisque();
        $ProducteurARisqueAlex = new ProducteurARisque();


        $SecteurAlex -> setNomSecteur("manutentionnaire");
        $SecteurAlex -> setCodeSecteur(01);
        echo $SecteurAlex;
        $SecteurAlex -> ajouterEmploye("Alex");

        echo $AdresseAlex;

        $VendeurAlex -> calculerSalaire(2000, 0, 0, 0);

        $ManutentionnaireAlex -> calculerSalaire(0, 50, 42, 0);

        $ProducteurAlex -> calculerSalaire(0, 0, 0, 690);

        $NucleaireAlex -> calculerSalaire(0, 69, 42, 0);

        echo $EquipementProtectionAlex;

        $ManutentionnaireARisqueAlex -> AffichageEmployeRisque(42, 0);

        $ProducteurARisqueAlex -> AffichageEmployeRisque(0, 10);
    ?>
</body>
</html>