<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="CSS/admmodifrese.css">
    <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="jquery.js"></script>
   <title>MODIFIER RESERVATION</title>
</head>
<body class="fg">
<form action="admmodifrese.php" method="GET">
   <input type="hidden" value="<?php
       echo $_GET["id"];
   ?>" name="id">
   <label>Nom :</label>
   <input type="text" name="nom" id="" class="form-control" name="nom" value="<?php
        echo $_GET["nom"];
   ?>">
   <label for="">Prenom :</label>
   <input type="text"class="form-control" name="prenom" value="<?php
        echo $_GET["prenom"];
   ?>" name="prenom">
   <label for="">Email :</label>
   <input type="email"class="form-control" name="email" value="<?php
       echo $_GET["email"];
   ?>" name="email">
   <label for=""> Telephone:</label>
   <input type="text"class="form-control" name="telephone" value="<?php
       echo $_GET["telephone"];
   ?>" name="telephone">
   <label for="">Type de chambre :</label>
   <select name="typerese" id=""class="form-control" value="<?php
       echo $_GET["typerese"];
   ?>" name="typerese">
    <option value="Chambre standard">Chambre standard</option>
    <option value="Chambre de luxe">Chambre de luxe</option>
    <option value="Chambre familiale">Chambre familiale</option>
    <option value="Chambre avec vue">Chambre avec vue</option>
    <option value="Suite de luxe">Suite de luxe</option>
    <option value="Suite presidentielle">Suite presidentielle</option>
    <option value="Suite junior">Suite junior</option>
   </select>
   <label for="">Nombre de chambre :</label>
   <input type="number"class="form-control" name="nombrechambre" value="<?php
       echo $_GET["nombrechambre"];
   ?>" name="nombrechambre">
   <label for="">Nombre de personne :</label>
   <input type="number"class="form-control" name="nombrepersonne" value="<?php
       echo $_GET["nombrepersonne"];
   ?>" name="nombrepersonne">
   <label for="">Date d'arrive :</label>
   <input type="date"class="form-control" name="arrive" value="<?php
       echo $_GET["arrive"];
   ?>" name="arrive">
   <label for="">Date de depart :</label>
   <input type="date"class="form-control" name="depart" value="<?php
       echo $_GET["depart"];
   ?>" name="depart">
   <label for="">Informations spéciales :</label>
   <textarea class="form-control" name="info" value="" name="info"><?php
       echo $_GET["info"];
   ?></textarea>
   <button type="submit" class="btn btn-dark">Valider</button>
   <?php
            if(isset($_GET["nom"]))
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
            $a=$_GET["nom"];
            $b=$_GET["prenom"];
            $c=$_GET["email"];
            $d=$_GET["telephone"];
            $e=$_GET["typerese"];
            $f=$_GET["nombrechambre"];
            $g=$_GET["nombrepersonne"];
            $h=$_GET["arrive"];
            $i=$_GET["depart"];
            $j=$_GET["info"];
            $k=$_GET["id"];
            $requete="UPDATE reservation  SET nom='".$a."' , prenom='".$b."', email='".$c."', telephone='".$d."', typerese='".$e."', nombrechambre='".$f."', nombrepersonne='".$g."', arrive='".$h."', depart='".$i."', info='".$j."'  WHERE id='".$k."';";
            //echo $requete;
            $resultat = mysqli_query($conn,$requete);
           
            }
      ?>
   <button type="reset" class="btn btn-dark"><a href="admlisterese.php">Annuler</a></button>
</form>
</body>
</html>