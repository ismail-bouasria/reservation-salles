
<?php


// <!-- =========================== TRAITEMENT INSCRIPTION ========================== -->

require "../require/bdd.php";
// Requête d'inscription des utilisateurs dans la base de donnée.
if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confpass = $_POST['password2'];
 if (!empty($login) && !empty($password) && !empty($confpass)) {
      // Requête pour ne pas inscrire plusieurs fois le même login 
    $reqinscription = mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login='$login'");
    $resinscription= mysqli_fetch_all($reqinscription,MYSQLI_ASSOC); 
    if (empty ($resinscription[0]['login'])) {
        // Requête pour verifier le mot de passe et sa confirmation 
          if ($confpass == $password) {

        mysqli_query($bdd,"INSERT INTO utilisateurs ( `login`,`password`) VALUES ('$login','$password','$path')");
        move_uploaded_file($_FILES["photo"]["tmp_name"], "../asset/upload/" . $_FILES["photo"]["name"]);
        header('location:../php/connexion.php');

     }else {

         header('location: ../php/inscription.php?err1=password');
     }
   }else {
     
       header('location: ../php/inscription.php?err2=loginexist');
   }
    
 }else {
     header('location: ../php/inscription.php?err3=champs');
 }
}
?>
