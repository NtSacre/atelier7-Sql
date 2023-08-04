<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création_de_la_Table_etudiant</title>
</head>

<body>
    <h1>Création de la table Etudiant</h1>
    <?php
    $servername = 'localhost';
    $bdname = 'gestion_uv_simplon';
    $username = "root";
    $password = "";
    try {
        // Connexion à la base de données
        $dbConnect = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);
        $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbConnect->beginTransaction();
        //Creation de la Table Etudiants avec la requete SQL
        $sql = "CREATE TABLE etudiants(
            Id_etudaint INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Nom VARCHAR(30) NOT NULL,
            Prenom VARCHAR(30) NOT NULL,
            Adresse VARCHAR(30) NOT NULL,
            Telephone VARCHAR(30) NOT NULL
            
            )";
        $dbConnect->exec($sql);
        echo "La table a été créée <br> ";
        $sql1 = "INSERT INTO etudiants(Nom,Prenom,Adresse,Telephone)VALUES('pierre','lapin','keur massar',777010001)";
        $dbConnect->exec($sql1);
        $sql2 = "INSERT INTO etudiants(Nom,Prenom,Adresse,Telephone)VALUES('Paul','Robert','dieupel',777020002)";
        $dbConnect->exec($sql2);
        $sql3 = "INSERT INTO etudiants(Nom,Prenom,Adresse,Telephone)VALUES('François','Mitérant','batrain',777030003)";
        $dbConnect->exec($sql3);
        $sql4 = "INSERT INTO etudiants(Nom,Prenom,Adresse,Telephone)VALUES('Poubelle','Edourd','mariste',777040004)";
        $dbConnect->exec($sql4);
        $sql5 = "INSERT INTO etudiants(Nom,Prenom,Adresse,Telephone)VALUES('Jolie','Rosaline','cite Avion',777050005)";
        $dbConnect->exec($sql5);
        echo "les données ont été ajouté";
        $dbConnect->commit();
    } catch (PDOException $e) {
        $dbConnect->rollBack();
        echo "Erreur est produit : " . $e->getMessage();
    }



    ?>

</body>

</html>