<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/reservationsalles.css">
    <title>Réservation</title>
</head>
<body>
    <?php
    session_start();
    require "../require/bdd.php";
    require "../require/header.php";
    ?>
    <main class="maincontener">
        <?php // requête pour évenement pour l'id 
        
        $eventid = $_GET['evenement'];

     $req = mysqli_query($bdd, "SELECT id_utilisateur, login, titre, description, debut, fin 
        FROM reservations
        INNER JOIN utilisateurs 
        ON reservations.id_utilisateur = utilisateurs.id WHERE reservations.id_utilisateur = '$eventid'");
        // Résultat de la requête.
     $res = mysqli_fetch_all($req, MYSQLI_ASSOC); 
        ?>
     <div class="contentform">

        <div class="formcard">
            <?php 
            foreach ($res as $key => $value) { ?>
                 <div class="padding">
                       <h3>Titre</h3> <?php echo $value['titre']?>
                    </div>
                    <div class="padding">
                    <h3>Descritpion</h3> <?php echo $value['description']?>
                    </div>
                    <div class="padding">
                    <h3>Début</h3> <?php echo $value['debut']?>
                    </div><div class="padding">
                    <h3>fin</h3><?php echo $value['fin']?>
                    </div>
           <?php } ?>
        </div>
     </div>

   
    </main>
    
    <?php
    require "../require/footer.php";
    ?>
</body>
</html>