<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/listeloca.css">
    <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE LOCATIONS</title>
</head>
<body class="bp">
<style>
        h1{
            font-size: 25px;
        }
        .bp{
            background-color: darkgoldenrod;
        }
    </style>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>Recherche de location</h1>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <form action="listeloca.php" method="GET">
                <input type="radio" name="type_recherche" value="1">
                <label>Recherche par nom</label>
            </div>
            <div class="col-md-4">
                <input type="radio" name="type_recherche" value="2" >
                <label>Recherche par telephone</label>
            </div>
            <div class="col-md-3">
                <input type="radio" name="type_recherche" value="3" >
                <label>Recherche par email</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="search">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <button class="btn btn-dark" type="submit">Rechercher</button>
            </div>
            <div class="col-md-2">
                <a href="location.php" class="btn btn-dark">Ajouter une location</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
    <?php
        if(isset($_GET["search"])){
             //on stocke les identifiants de la base de données
            $database = "test1";
            $username = "root";
            $password = "";
            $servername = "localhost";
            //connexion à la base de données
            $connexion = mysqli_connect($servername,$username,$password);
            //selection de la base de données
            mysqli_select_db($connexion,$database);
            //Recuperer le mot que l'on recherche
            $mot = $_GET["search"];
            //preparer la requete
            if($_GET["type_recherche"] == "1"){
                $requete = "SELECT * FROM location WHERE nomloca like'%".$mot."%';";
            }
            if($_GET["type_recherche"] == "2"){
                $requete = "SELECT * FROM location WHERE telephoneloca like'%".$mot."%';";
            }
            if($_GET["type_recherche"] == "3"){
                $requete = "SELECT * FROM location WHERE emailloca like'%".$mot."%'; ";
            }
            //Execution de la requete
            $result = mysqli_query($connexion,$requete);
            //verifier le contenu de la requete
            $nombreresultat = mysqli_num_rows($result);
            if( $nombreresultat == "0"){
                echo"<h1 class='text-danger'>Not found</h1>";
            }else{
               echo" <table class='table table-hover' border='2'>
            <thead>
                <th>Action1</th>
                <th>Action2</th>
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>telephone</th>
                <th>type de location</th>
                <th>Nombre de personne</th>
                <th>Date</th>
                <th>Heure arrivée</th>
                <th>Heure départ</th>
                <th>Informations</th>
            </thead>";
    
        while ($donnee = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>";
                echo "<a href = 'supploca.php?idloca=".$donnee['idloca']."' class=' btn btn-dark '>Supprimer</a>";
            echo "</td>";
            echo "<td>";
                echo "<a href = 'modifloca.php?idloca=".$donnee['idloca']."&nomloca=".$donnee['nomloca']."&prenomloca=".$donnee['prenomloca']."&emailloca=".$donnee['emailloca']."&telephoneloca=".$donnee['telephoneloca']."&typereseloca=".$donnee['typereseloca']."&nombrepersonneloca=".$donnee['nombrepersonneloca']."&nombrejourloca=".$donnee['nombrejourloca']."&arriveloca=".$donnee['arriveloca']."&departloca=".$donnee['departloca']."&infoloca=".$donnee['infoloca'].""."' class=' btn btn-dark '>Modifier</a>";
            echo "</td>";
            echo "<td>";
                echo $donnee ["idloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["nomloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["prenomloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["emailloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["telephoneloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["typereseloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["nombrepersonneloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["nombrejourloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["arriveloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["departloca"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["infoloca"];
            echo "</td>";
        echo "</tr>";
            }
            echo   " </table>";
            }   
        } 
    ?>
</body>
</html>