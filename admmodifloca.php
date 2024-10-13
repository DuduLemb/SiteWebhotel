<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="CSS/modiloca.css">
    <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="jquery.js"></script>
   <title>MODIFIER RESERVATION</title>
</head>
<style>
    .fg{
        background-color: darkgoldenrod;
    }
</style>
<body class="fg">
<form action="admmodifloca.php" method="GET">
   <input type="hidden" value="<?php
       echo $_GET["idloca"];
   ?>" name="idloca">
   <label>Nom :</label>
   <input type="text" name="nomloca" id="" class="form-control" name="nomloca" value="<?php
        echo $_GET["nomloca"];
   ?>">
   <label for="">Prenom :</label>
   <input type="text"class="form-control" name="prenomloca" value="<?php
        echo $_GET["prenomloca"];
   ?>" name="prenomloca">
   <label for="">Email :</label>
   <input type="email"class="form-control" name="emailloca" value="<?php
       echo $_GET["emailloca"];
   ?>" name="emailloca">
   <label for=""> Telephone:</label>
   <input type="text"class="form-control" name="telephoneloca" value="<?php
       echo $_GET["telephoneloca"];
   ?>" name="telephoneloca">
   <label for="">Type de location :</label>
   <select name="typereseloca" id=""class="form-control" value="<?php
       echo $_GET["typereseloca"];
   ?>" name="typereseloca">
    <option value="Piscine">Piscine</option>
    <option value="Restaurant">Restaurant</option>
    <option value="Spa">Spa</option>
    <option value="Salle de sport">Salle de sport</option>
    <option value="Salle de réunion">Salle de réunion</option>
    <option value="Salle de banquet">Salle de banquet</option>
    <option value="Suite présentation">Suite présentation</option>
    <option value="Suite conférence">Suite conférence</option>
   </select>
   <label for="">Nombre de personne :</label>
   <input type="number"class="form-control" name="nombrepersonneloca" value="<?php
       echo $_GET["nombrepersonneloca"];
   ?>" name="nombrepersonneloca">
   <label for="">Date :</label>
   <input type="date"class="form-control" name="nombrejourloca" value="<?php
       echo $_GET["nombrejourloca"];
   ?>" name="nombrejourloca">
   <label for="">Heure d'arrive :</label>
   <input type="time"class="form-control" name="arriveloca" value="<?php
       echo $_GET["arriveloca"];
   ?>" name="arriveloca">
   <label for="">Heure de depart :</label>
   <input type="time"class="form-control" name="departloca" value="<?php
       echo $_GET["departloca"];
   ?>" name="departloca">
   <label for="">Informations spéciales :</label>
   <textarea class="form-control" name="infoloca" value="" name="infoloca"><?php
       echo $_GET["infoloca"];
   ?></textarea>
   <button type="submit" class="btn btn-dark">Valider</button>
   <?php
            if(isset($_GET["nomloca"]))
            {     
            //stocker les identifiants
            $servername="localhost";
            $password="";
            $username="root";
            $database="test1";
            //on établie la connexion
            $conn=mysqli_connect($servername,$username,$password);
            //choix de la base de donnée
            mysqli_select_db($conn,$database);
            $a=$_GET["nomloca"];
            $b=$_GET["prenomloca"];
            $c=$_GET["emailloca"];
            $d=$_GET["telephoneloca"];
            $e=$_GET["typereseloca"];
            $f=$_GET["nombrepersonneloca"];
            $g=$_GET["nombrejourloca"];
            $h=$_GET["arriveloca"];
            $i=$_GET["departloca"];
            $j=$_GET["infoloca"];
            $k=$_GET["idloca"];
            $requete="UPDATE location  SET nomloca='".$a."' , prenomloca='".$b."', emailloca='".$c."', telephoneloca='".$d."', typereseloca='".$e."', nombrepersonneloca='".$f."', nombrejourloca='".$g."', arriveloca='".$h."', departloca='".$i."', infoloca='".$j."'  WHERE idloca='".$k."';";
            //echo $requete;
            $resultat = mysqli_query($conn,$requete);
           
            }
      ?>
   <button type="reset" class="btn btn-dark"><a href="admlisteloca.php">Annuler</a></button>
</form>
</body>
</html>