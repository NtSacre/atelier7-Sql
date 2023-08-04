<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table_livre</title>
</head>

<body>
    <h1>Creation de la table livre</h1>
    <?php
    $servername = 'localhost';
    $bdname = 'gestion_uv_simplon';
    $username = "root";

    $password = "";

    try {
        $dbConnect = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);
        $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbConnect->beginTransaction();
        $sql1 = "INSERT INTO livres(Titre,Auteur,Année_Publication) VALUES('Bible','Jesus Christ',2004)";
        $dbConnect->exec($sql1);
        $sql2 = "INSERT INTO livres(Titre,Auteur,Année_Publication) VALUES('Coran','Allah',632)";
        $dbConnect->exec($sql2);
        $sql3 = "INSERT INTO livres(Titre,Auteur,Année_Publication) VALUES('Torah','Elohim',1008)";
        $dbConnect->exec($sql3);
        $sql4 = "INSERT INTO livres(Titre,Auteur,Année_Publication) VALUES('Veda','Krishna','V siecle')";
        $dbConnect->exec($sql4);
        $sql5 = "INSERT INTO livres(Titre,Auteur,Année_Publication) VALUES('Vinaya Pitaka','Bouhda','I siecle')";
        $dbConnect->exec($sql5);
        echo "Les donnée ont été ajouté";
        $dbConnect->commit();
    } catch (PDOException $e) {
        $dbConnect->rollBack();
        echo "Erreur : " . $e->getMessage();
    }
    ?>
</body>

</html>