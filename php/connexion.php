<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/reservationsalles.css">
    <title>Connexion</title>
</head>

<body>
    <?php
    session_start();
    require "../require/bdd.php";
    require "../require/header.php";
    ?>
    <main>
        <div class="contentform">
        <?php 
                 if (isset($_GET['err1'])) {
                 ?>
                    <div class="messerror">
                        <p> Connexion impossible, mot de passe incorrecte !</p>
                    </div>
            <?php } elseif (isset($_GET['err2'])) {
                 ?>
                    <div class="messerror">
                        <p> Connexion impossible, le login n'existe pas !</p>
                    </div>
            <?php }  elseif (isset($_GET['err3'])) {
                 ?>
                    <div class="messerror">
                        <p> Connexion impossible, vueillez remplir les champs!</p>
                    </div>
            <?php } ?>
            <div class="formcard">

                <form action="../traitement/traitement-connexion.php" method="POST" enctype="multipart/form-data">
                    <div class="padding">
                        <h1>Connexion</h1>
                    </div>
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
                        <label><b>Confirmation du mot de passe</b></label>
                    </div>
                    <div class="padding">
                        <input type="password" placeholder="Confirmer le mot de passe" name="password2" required>
                    </div>
                    <div class="padding">
                        <input type="submit" name="connect" value='CONNEXION'>
                    </div>
                </form>
            </div>
            
        </div>
    </main>

    <?php
    require "../require/footer.php";
    ?>
</body>

</html>