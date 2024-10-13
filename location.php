<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/location.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION</title>
    <script src="jquery.js"></script>
    <script src="location.js"></script>
</head>
<body>
    <header>
        <div class="row he">
            <div class="col-md-1 "><img src="IMG/Logo1.png" class="logo"></div>
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="topnav">
                    <a href="index.php">ACCUEIL</a>
                    <a href="galerie.php">GALERIE</a>
                    <a href="attraction.php">ATTRACTION</a>
                    <a href="reservation.php">RESERVATION</a>
                    <a class="active" href="location.php">LOCATION</a>
                    <a href="apropros.php">A PROPOS</a>
                </div>
            </div>
        </div>
        <div class="head">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1 class="titlo">Louer</h1>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </header>
    <section>
        <div class="row la"></div>
        <div class="row li">
            <div class="col-md-3 "></div>
            <div class="col-md-6 wrapper">
                <form id="rese-form" >
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
                    <button class="btn btn-dark yu "><a href="listeloca.php" class="ju">Modifier/supprimer vos reservations</a></button>
                </form>
            </div>
            <div class="col-md-3 "></div>
        </div>
        <div class="row la"></div>
    </section>
    <footer>
        <div class="row conta fo">
            <div class="col-md-4"  >
                CONTACT:lembeduhane@gmail.com
            </div>
            <div class="col-md-4"  >
                <ul id="listicones">
                    <li><a target="_blank" href="https://www.facebook.com"><img class="icones" src="IMG/facebook.png" alt="facebook"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com"><img class="icones" src="IMG/instagram.png" alt="instagram"></a></li>
                    <li><a target="_blank" href="https://www.twitter.com"><img class="icones" src="IMG/twitter.png" alt="twitter"></a></li>
                </ul>
            </div>
            <div class="col-md-4" >
                LOCALISATION:Ottawa au Canada
            </div>
        </div>
    </footer>

</body>
</html>