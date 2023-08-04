<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table d'emprunt</title>
</head>

<body>
    <h1>Création de la Table d'emprunt</h1>
    <?php
    $servername = 'localhost';
    $dbname = 'gestion_uv_simplon';
    $username = 'root';
    $password = '';
    try {
        $dbConnect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbConnect->beginTransaction();
        $sql = "CREATE TABLE emprunt(
        Id_emprunt INT UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
        Id_etudiant INT UNSIGNED,
        Id_livre INT UNSIGNED,   
        Date_Emprunt Date,
        Date_Retour VARCHAR(30) NOT NULL,
        FOREIGN KEY (Id_etudiant) REFERENCES etudiants(Id_etudiant),
        FOREIGN KEY (Id_livre) REFERENCES livres(Id_livre)
    )";
        $dbConnect->exec($sql);
        echo "la table emprunt a été créé";
        $dbConnect->commit();
    } catch (PDOException $e) {
        $dbConnect->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
    ?>

</body>

</html>