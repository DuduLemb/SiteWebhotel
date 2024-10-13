<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/admrese.css">
    <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION</title>
    <script src="jquery.js"></script>
    <script src="admreservation.js"></script>
</head>
<body>
    <div class="row bi"></div>
        <div class="row">
            <div class="col-md-3 be"></div>
            <div class="col-md-6 bt">
                <form id="rese-form" >
                    <h1 class="le">Formulaire de reservation</h1>
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" required>
                    <label>Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" required>
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                    <label>Telephone</label>
                    <input type="text" name="telephone" class="form-control" id="telephone" required>
                    <label>Type de chambre/suite</label>
                    <select name="typerese" id="typerese">
                        <option value="Chambre standard">Chambre standard</option>
                        <option value="Chambre de luxe">Chambre de luxe</option>
                        <option value="Chambre familiale">Chambre familiale</option>
                        <option value="Chambre avec vue">Chambre avec vue</option>
                        <option value="Suite de luxe">Suite de luxe</option>
                        <option value="Suite presidentielle">Suite presidentielle</option>
                        <option value="Suite junior">Suite junior</option>
                    </select>
                    <label>Nombre de chambre</label>
                    <input type="number" name="nombrechambre" class="form-control" id="nombrechambre" required>
                    <label>Nombre de personne</label>
                    <input type="number" name="nombrepersonne" class="form-control" id="nombrepersonne" required>
                    <label>Date d'arrivée</label>
                    <input type="date" name="arrive" class="form-control" id="arrive" required>
                    <label>Date de départ</label>
                    <input type="date" name="depart" class="form-control" id="depart" required>
                    <label>Informations complémentaires</label>
                    <textarea class="form-control" name="info" id="info" required></textarea>
                    <button type="submit" class="btn btn-dark yu" id="valider"> Valider</button>
                    <button class="btn btn-dark yu "><a href="admlisterese.php">Modifier/supprimer les reservations</a></button>
                    <button class="btn btn-dark yu "><a href="admin.php " class="ju">Retour</a></button>
                </form>
            </div>
            <div class="col-md-3 be"></div>
        </div>
    <div class="row bi"></div>
    <?php
    /*
        if (isset($_GET["nom"])){
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
            $f = $_GET["nombrechambre"];
            $g = $_GET["nombrepersonne"];
            $h = $_GET["arrive"];
            $i = $_GET["depart"];
            $j = $_GET["info"];
            $requete = "INSERT INTO reservation (nom,prenom,email,telephone,typerese,nombrechambre,nombrepersonne,arrive,depart,info) VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."');";
            echo $requete;
            //Execution de la requete
            $result = mysqli_query($connexion,$requete);
        }
            */
    ?>
</body>
</html>