<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<style>
        .bj{
                background-color: darkgoldenrod;
        }
        h1{
                color: black;
                font-family: cursive;
                margin-left: 280px;
                margin-top: 200px;
        }
        .ju{
                text-decoration: none;
                color: white;
        }
        .ju:hover{
                text-decoration: none;
                color: inherit;
        }
        .oi{
                margin-left: 390px;
                margin-top: 20px;
        }
</style>
<body class="bj">
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
    //preparer la requete
    $a = $_GET["nom"];
    $b = $_GET["prenom"];
    $c = $_GET["email"];
    $d = $_GET["telephone"];
    $e = $_GET["typerese"];
    $f = $_GET["nombrepersonne"];
    $g = $_GET["nombrejour"];
    $h = $_GET["arrive"];
    $i = $_GET["depart"];
    $j = $_GET["info"];
    $requete = "INSERT INTO location (nomloca,prenomloca,emailloca,telephoneloca,typereseloca,nombrepersonneloca,nombrejourloca,arriveloca,departloca,infoloca) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."');";
    //echo $requete;
    //Execution de la requete
   $result = mysqli_query($connexion,$requete);
   

?>
        <button class="btn btn-dark oi"><a href="admloca.php" class="ju">Ajouter une location</a></button>
        <?php
            echo"<h1>Enregistrement réussie</h1>";
        ?>
</body>
</html>