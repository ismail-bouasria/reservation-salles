<!-- =========================== TRAITEMENT RESERVATION ======================== -->

<?php

session_start();

require "../require/bdd.php";


$user = $_SESSION['username'];
$reqreservation = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login='$user'");
$resreservation = mysqli_fetch_all($reqreservation, MYSQLI_ASSOC);

$_SESSION['id'] = $resreservation[0]['id'];
$merror = '';


if (isset($_POST['reserver'])) {

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $debut = $_POST['ddb'];
    $fin = $_POST['ddf'];
   
    $id = $_SESSION['id'];
     
    $heured = "$date $debut:00";
    $heuref = "$date $fin:00";


    if (!empty($titre) && !empty($description) && !empty($debut) && !empty($date) && !empty($fin)) {
        var_dump('toto');
        $reqreservation2 = mysqli_query($bdd, "SELECT * FROM `reservations` WHERE debut='$heured'");
        

        $resreservation2 = mysqli_fetch_all($reqreservation2, MYSQLI_ASSOC);
        var_dump($resreservation2);
        $debutint = intval($debut);
        $heuremax = $debutint + 1;

      
        if ( intval($fin) == $heuremax) {


            $reservdmax = $resreservation2[0]['debut'] == $heured;
            $reservfmax = $resreservation2[0]['fin'] == $heuref;

            if (!empty($reservdmax) && !empty($reservfmax)) {
                
                header('location: ../php/reservation-form.php?err3=yetres');

            } else {

                mysqli_query($bdd, "INSERT INTO reservations (`titre`, `description`, `debut`, `fin`, `id_utilisateur`) 
                VALUES ('$titre','$description','$heured','$heuref','$id')");

                header('location: ../php/reservation-form.php?reservation=succed');

            }
        } else {
            
            header('location: ../php/reservation-form?err2=hour');
            
        }
    }else {
    
        header('location: ../php/reservation-form?err1=empty');
    }
} 
?>