<header>
        <div class="logocontainer"><img class="logosize" src="../asset/images/reserved.png" alt=""></div>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
               <?php 

               if (isset($_SESSION['id'])) { ?>

                  <li class="menu-deroulant">
                  <a href="#">Bienvenue <?php echo $_SESSION['username']; ?></a>
                  <ul class="sous-menu">
                      
                      <li><a href="profil.php">Profil</a></li>
                      <li><a href="reservation.php?evenement=<?php echo $_SESSION['id'];?>">Vos réservations</a></li>
                      <li>
                          <form action="" method="POST">
                              <input type="submit" name="deconnexion" value="Déconnexion">
                          </form>
                      </li>
                  </ul>
              </li>
              <?php } else { ?>

                        <li class="menu-deroulant">
                            <a href="#">Membres</a>
                            <ul class="sous-menu">
                                <li><a href="inscription.php">Inscription</a></li>
                                <li><a href="connexion.php">Connexion</a></li>
                        
                            </ul>
                       </li> 
             <?php } ?>
                
                <li class="menu-deroulant">
                    <a href="#">Réservation salles</a>
                    <ul class="sous-menu">
                    <li><a href="reservation-form.php">Réserver votre salle</a></li>
                        <li><a href="planning.php">Planning</a></li>
                    </ul>
                </li>
               
            </ul>
        </nav>
    </header>