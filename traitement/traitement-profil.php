<!-- =========================== TRAITEMENT PROFIL ============================= -->

<?php

session_start();


require "../require/bdd.php";


$user = $_SESSION['username'];

if (isset($_POST['edit'])) {
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];
     if (!empty($login) && !empty($pass) && !empty($pass2)) {
         
       // requête pour garder le même login et ne pas utiliser un login déjà existant.
        $reqprofil= mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login='$login'");
        $resprofil= mysqli_fetch_all($reqprofil,MYSQLI_ASSOC);
         if (empty($resprofil) || $resprofil[0]['login'] == $user) {
           }
             if ($pass2 == $pass) {
                mysqli_query($bdd,"UPDATE `utilisateurs` SET `login`='$login',`password`='$pass' WHERE login='$user'");
                $_SESSION['username'] = $login;
                header('location: ../php/profil.php?edit=succeed');
             }else{
                header('location: ../php/profil.php?err1=password');
             }
         }else {
             header('location: ../php/profil.php?err2=login');
         }
     }else {
         header('location: ../php/profil.php?err2=champs');
     }

?>