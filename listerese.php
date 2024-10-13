<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/listerese.css">
    <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE RESERVATIONS</title>
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
            <h1>Recherche de reservation</h1>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <form action="listerese.php" method="GET">
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
                <a href="reservation.php" class="btn btn-dark">Ajouter une reservation</a>
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
                $requete = "SELECT * FROM reservation WHERE nom like'%".$mot."%';";
            }
            if($_GET["type_recherche"] == "2"){
                $requete = "SELECT * FROM reservation WHERE telephone like'%".$mot."%';";
            }
            if($_GET["type_recherche"] == "3"){
                $requete = "SELECT * FROM reservation WHERE email like'%".$mot."%' ;";
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
                <th>type de chambre</th>
                <th>nombre de chambre</th>
                <th>nombre de personne</th>
                <th>arrivée</th>
                <th>départ</th>
                <th>Informations</th>
            </thead>";
    
        while ($donnee = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>";
                echo "<a href = 'supprese.php?id=".$donnee['id']."' class=' btn btn-dark '>Supprimer</a>";
            echo "</td>";
            echo "<td>";
                echo "<a href = 'modifrese.php?id=".$donnee['id']."&nom=".$donnee['nom']."&prenom=".$donnee['prenom']."&email=".$donnee['email']."&telephone=".$donnee['telephone']."&typerese=".$donnee['typerese']."&nombrechambre=".$donnee['nombrechambre']."&nombrepersonne=".$donnee['nombrepersonne']."&arrive=".$donnee['arrive']."&depart=".$donnee['depart']."&info=".$donnee['info'].""."' class=' btn btn-dark '>Modifier</a>";
            echo "</td>";
            echo "<td>";
                echo $donnee ["id"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["nom"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["prenom"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["email"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["telephone"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["typerese"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["nombrechambre"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["nombrepersonne"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["arrive"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["depart"];
            echo "</td>";
            echo "<td>";
                echo $donnee ["info"];
            echo "</td>";
        echo "</tr>";
            }
            echo   " </table>";
            }   
        } 
    ?>
</body>
</html>