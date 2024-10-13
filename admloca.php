<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/admrese.css">
    <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCATION</title>
    
    
</head>
<body>
    <div class="row bi"></div>
        <div class="row">
            <div class="col-md-3 be"></div>
            <div class="col-md-7 bt">
                <form id="rese-form" action="admajoutloca.php" method="get" >
                    <h1 class="le">Formulaire de location</h1>
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" required>
                    <label>Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" required>
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                    <label>Telephone</label>
                    <input type="text" name="telephone" class="form-control" id="telephone" required>
                    <label>Type de location</label>
                    <select name="typerese" id="typerese">
                        <option value="Piscine">Piscine</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Spa">Spa</option>
                        <option value="Salle de sport">Salle de sport</option>
                        <option value="Suite de luxe">Salle de réunion</option>
                        <option value="Suite presidentielle">Salle de banquet</option>
                        <option value="Suite junior">Salle de présentation</option>
                        <option value="Suite junior">Salle de conférence</option>
                    </select>
                    <label>Nombre de personne</label>
                    <input type="number" name="nombrepersonne" class="form-control" id="nombrepersonne" required>
                    <label>Date</label>
                    <input type="date" name="nombrejour" class="form-control" id="nombrejour" required>
                    <label>Heure d'arrivée</label>
                    <input type="time" name="arrive" class="form-control" id="arrive" required>
                    <label>Heure de départ</label>
                    <input type="time" name="depart" class="form-control" id="depart" required>
                    <label>Informations complémentaires</label>
                    <textarea class="form-control" name="info" id="info" required></textarea>
                    <button type="submit" class="btn btn-dark yu" id="valider"> Valider</button>
                    <button class="btn btn-dark yu "><a href="admlisteloca.php" class="ju">Modifier/supprimer vos locations</a></button>
                    <button class="btn btn-dark yu "><a href="admin.php " class="ju">Retour</a></button>
                </form>
            </div>
            <div class="col-md-2 be"></div>
        </div>
    <div class="row bi"></div>
    
</body>
</html>        