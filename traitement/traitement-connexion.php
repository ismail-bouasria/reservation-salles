<!-- =========================== TRAITEMENT CONNEXION ========================== -->   

<?php 
session_start();
require "../require/bdd.php";

             if (!isset($_SESSION['username'])) {?>
                <form   action="" method="POST">
                  <img width="40%" src="../asset/images/connexion.jpg" alt="">
                 <div class="padding">
                    <label><b>Login</b></label>
                 </div>
                 <div class="padding"> 
                    <input type="text" placeholder="Entrer le login d'utilisateur" name="login" required>
                 </div>
                
                 <div class="padding">
                    <label><b>Mot de passe</b></label>
                 </div>
                 <div class="padding"> 
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                 </div>

                 <div class="padding"> 
                    <input type="submit" id='submit' name="submit" value='CONNEXION' > 
                 </div> 
                </form>
                <?php  }  ?>
                <?php 

            //    Condition de connexion
                 if (isset($_POST['connect'])) {


                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    $reqconnexion = mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login='$login'");
                    $resconnexion = mysqli_fetch_all($reqconnexion,MYSQLI_ASSOC);


                     if (!empty($login) && !empty($password)) {
                         if (!empty($resconnexion)) {

                             if ($resconnexion[0]['password'] == $password) {

                                 $_SESSION['username'] = $resconnexion[0]['login'];
                                 $_SESSION['id'] = $resconnexion[0]['id'];

                                 header('location: ../index.php');

                             }else {
                                header('location: ../php/connexion.php?err1=password');
                             }
                         }else {
                             header('location: ../php/connexion.php?err2=login');
                         }
                     }else {
                        
                        header('location: ../php/connexion.php?err3=champs');
                     }
                 }
                 ?>