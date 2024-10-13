<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/supploca.css">
    <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPPRESSION LOCATION</title>
</head>
<body class="hn">
<?php
        //on stocke les identifiants de la base de données
        $database = "test1";
        $username = "root";
        $password = "";
        $servername = "localhost";
        //connexion à la base de données
        $connexion = mysqli_connect($servername,$username,$password);
        //selection de la base de données
        mysqli_select_db($connexion,$database);
        //Requete de suppression
        $requete = "DELETE FROM location WHERE idloca =".$_GET['idloca'].";";
        //Execution de la requete
        echo "Suppression reussie";
        $result = mysqli_query($connexion,$requete);    
?>
    <a href="admlisteloca.php" class="btn btn-dark">Retour</a>
</body>
</html>