<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/reservationsalles.css">
    <title>Planning</title>
</head>

<body>
    <?php
    session_start();
    require "../require/bdd.php";
    require "../require/header.php";
    ?>

    <main class="maincontener">

        <?php
        $id= $_SESSION['id'];
        $req = mysqli_query($bdd, "SELECT utilisateurs.id,utilisateurs.login, reservations.titre,reservations.titre,reservations.description,reservations.debut,reservations.fin
       FROM reservations 
       INNER JOIN utilisateurs 
       ON reservations.id_utilisateur= utilisateurs.id");
        $res = mysqli_fetch_all($req,MYSQLI_ASSOC);

        ?>
        <div class="center">
            <table>
                <thead>
                    <tr>
                        <th> </th>
                        <th> Lundi </th>
                        <th> Mardi </th>
                        <th> Mercredi </th>
                        <th> Jeudi </th>
                        <th> Vendredi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php // générations des  $heure pr les tranches horaires,
                    for ($heure = 8; $heure < 19; $heure++) {
                        echo "<tr><td>" . $heure . "h-" . ($heure + 1) . "h</td>";
                        // génération des réservations$ par case. 
                        for ($reserv = 1; $reserv <= 5; $reserv++) {
                            echo "<td>";
                            foreach ($res as $value) {
                                $date_debut = strtotime($value['debut']);
                                $day_debut = date('N', $date_debut);
                                $heure_debut = date('H', $date_debut);
                                $heure_debut = intval($heure_debut);

                                if ($day_debut == $reserv && $heure_debut == $heure) { 
                                    $eventid = $value['id'];
                                    if ($_SESSION['id'] == $eventid ) { ?>
                                        <div class="contentcardlo2">

                                            <div class="cardlomini1">
                                                <div class="cardlogin">
                                                 <?php echo $value['login'];?>
                                                </div>
                                            </div>
                                            <div class="cardcom">
                                            <a href ='reservation.php?evenement=<?php echo $eventid; ?>'>Votre reservation</a>
                                            </div>
                                        </div>
                                  <?php  }else {?>
                                    <div class="contentcardlo2">
                                            <div class="cardcom">
                                                <p>Salle déjà réservée!</p> 
                                            </div>
                                        </div>
                                  <?php }       
                                } 
                            }
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            
                    <tr>
                     <?php

                     ?>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </main>

    <?php
    require "../require/footer.php";
    ?>
</body> 

</html>