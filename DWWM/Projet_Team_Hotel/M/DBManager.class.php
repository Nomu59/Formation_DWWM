<?php

class DBManager
{
        private PDO $bdd;
        private string $lien;
        private string $id;
        private string $password;

        public function __construct(string $lien, string $id, string $password)
        {
                $this->bdd = new PDO($lien, $id, $password);
        }

        public function selectListeClient(): array
        {
                $stmt = $this->bdd->prepare("SELECT * FROM `client`;");
                $result = $stmt->execute();
                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                        return [];
                }
                $listeClient = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $listeClient;
        }

        public function selectListeChambre($x): array
        // x = 0 : selectionne toute les chambre
        // x = 1 : selectionne les chambres libre
        {
                if ($x == 0) {

                        $stmt = $this->bdd->prepare("SELECT * FROM `chambre`;");
                        $result = $stmt->execute();
                        if (!$result) {
                                $_SESSION['errorInfo'] = $stmt->errorInfo();
                                echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                                return [];
                        }
                        $listeChambre = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        return $listeChambre;
                } else if ($x == 1) {
                        $stmt = $this->bdd->prepare("SELECT * FROM chambre WHERE num_Chamb NOT IN (SELECT num_Chamb FROM reservation);");
                        $result = $stmt->execute();
                        if (!$result) {
                                $_SESSION['errorInfo'] = $stmt->errorInfo();
                                echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                                return [];
                        }
                        $listeChambre = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        return $listeChambre;
                }
        }

        public function selectListeReservation(): array
        {
                $stmt = $this->bdd->prepare("SELECT * FROM `reservation`;");
                $result = $stmt->execute();
                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                        return [];
                }
                $listeReservation = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $listeReservation;
        }

        public function selectListeUtilisateur(): array
        {
                $stmt = $this->bdd->prepare("SELECT * FROM `utilisateur`;");
                $result = $stmt->execute();
                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                        return [];
                }
                $listeUtilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $listeUtilisateur;
        }

        // Méthode qui ajoute une personne
        public function insertClient($prenomClient, $adressClient, $teleClient, $nationalite, $numPasse): void
        {
                $sql = "INSERT INTO client (`prenom_Client`, `adress_Client`, `tele_Client`, `nationalite`, `num_Passe`) VALUES (?, ?, ?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $result = $stmt->execute([$prenomClient, $adressClient, $teleClient, $nationalite, $numPasse]);
                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                }
        }

        public function insertUtilisateur($login, $motDePasse): void
        {
                $sql = "INSERT INTO utilisateur (`login`, `mot_De_Passe`, `cod_Client`) VALUES (?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $result = $stmt->execute([$login, $motDePasse, count($this->selectListeClient())]);
                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                }
        }

        public function insertChambre($numChambre, $etage, $prix, $emplacement, $codeCategorie): void
        {
                $sql = "INSERT INTO chambre (`num_Chamb`, `etage`, `prix`, `emplacement`, `code_Categorie`) VALUES (?, ?, ?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $result = $stmt->execute([$numChambre, $etage, $prix, $emplacement, $codeCategorie]);
                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                }
        }

        public function insertCategorie($codeCategorie, $designation, $numChamb): void
        {
                $sql = "INSERT INTO categorie (`code_Categorie`, `designation`, `num_Chamb`) VALUES (?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $result = $stmt->execute([$codeCategorie, $designation, $numChamb]);
                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                }
        }

        public function insertReservation($dateReservation, $numChamb, $dateEntree, $dateSortie, $codClient): void
        {
                $sql = "INSERT INTO reservation (`date_Reservation`, `num_Chamb`, `date_Entree`, `date_Sortie`, `cod_Client`) VALUES (?, ?, ?, ?, ?)";
                $stmt = $this->bdd->prepare($sql);
                $result = $stmt->execute([$dateReservation, $numChamb, $dateEntree, $dateSortie, $codClient]);

                $reservationCount = count($this->selectListeReservation());
                $sql = "UPDATE chambre SET num_Reservation = " . $reservationCount . " WHERE num_Chamb = " . $numChamb;
                $stmt = $this->bdd->prepare($sql);
                $result = $stmt->execute([]);

                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                }
        }

        public function hashConnexion($id, $pass): bool
        {
                $sql = "SELECT login, mot_De_Passe, cod_Client FROM utilisateur WHERE login = ?";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$id]);
                $result = $stmt->fetch();

                if (!$result) {
                        echo "Cet utilisateur n'existe pas";
                        return false;
                }

                $storedHash = $result['mot_De_Passe'];
                if (password_verify($pass, $storedHash)) {
                        $_SESSION['cod_Client'] = $result['cod_Client']; // Ajout de la variable de session

                        return true;
                } else {
                        echo "Identifiant ou mot de passe incorrect";
                        return false;
                }
        }


        public function connexion($id, $pass)
        {
                $sql = "SELECT login, mot_De_Passe FROM utilisateur WHERE login = ? AND mot_De_Passe = ?";
                $stmt = $this->bdd->prepare($sql);
                $result = $stmt->execute([$id, $pass]);
                if (!$result) {
                        $errorInfo = $stmt->errorInfo();
                        echo "Erreur SQL : " . $errorInfo[2];
                        return null;
                }
                $result = $stmt->fetch();
                return $result;
        }


        public function reservation($numChamb)
        {
                $sql = "DELETE FROM chambre WHERE num_Chamb = ?";
                $stmt = $this->bdd->prepare($sql);
                $result = $stmt->execute([$numChamb]);
                if (!$result) {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                }
        }

        public function getCodeUtilisateur($login)
        {
                $stmt = $this->bdd->prepare("SELECT cod_Client FROM utilisateur WHERE login = ?");
                $stmt->execute([$login]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result) {
                        return $result['cod_Client'];
                } else {
                        $_SESSION['errorInfo'] = $stmt->errorInfo();
                        echo "Erreur SQL : " . $_SESSION['errorInfo'][2];
                        return null;
                }
        }


        public function testInsert()
        {
                // // Crée un lien vers la base de données
                $bdd = new DBManager('mysql:host=localhost;dbname=teamhotel;charset=utf8mb4', 'root', '');


                // Crée les chambres avec 3 catégories
                for ($i = 0; $i < 30; $i++) {
                        if ($i >= 20) {
                                $prix = rand(500, 750);
                                $bdd->insertChambre(100 + $i, 3, $prix, "Est", 3);
                        } else if ($i >= 10 && $i < 20) {
                                $prix = rand(1000, 1350);
                                $bdd->insertChambre(100 + $i, 2, $prix, "Sud", 2);
                        } else if ($i < 10) {
                                $prix = rand(3200, 3800);
                                $bdd->insertChambre(100 + $i, 1, $prix, "Nord", 1);
                        }
                }

                // Crée les catégories de chambre
                $bdd->insertCategorie(3, "Luxe", 120);
                $bdd->insertCategorie(2, "SuperLuxe", 110);
                $bdd->insertCategorie(1, "UltraLuxe", 100);

                // Ajoute un client
                // $bdd->insertClient(1, "John Doe", "123 Rue Principale", "0123456789", "France", "123456789");

                // // Ajoute un utilisateur
                // $bdd->insertUtilisateur("admin", "admin", 1);
        }

        public function clearTable(): void
        {
                $tables = array("choisir", "Reservation", "Client", "Utilisateur", "Chambre", "Categorie");

                foreach ($tables as $table) {
                        $sql = "SET FOREIGN_KEY_CHECKS=0; TRUNCATE TABLE " . $table . "; SET FOREIGN_KEY_CHECKS=1;";
                        $stmt = $this->bdd->prepare($sql);
                        $stmt->execute();
                }
        }

        /**
         * Get the value of password
         */
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of lien
         */
        public function getLien()
        {
                return $this->lien;
        }

        /**
         * Set the value of lien
         *
         * @return  self
         */
        public function setLien($lien)
        {
                $this->lien = $lien;

                return $this;
        }

        /**
         * Get the value of bdd
         */
        public function getBdd()
        {
                return $this->bdd;
        }

        /**
         * Set the value of bdd
         *
         * @return  self
         */
        public function setBdd($bdd)
        {
                $this->bdd = $bdd;

                return $this;
        }
}
