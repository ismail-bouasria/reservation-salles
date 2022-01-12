<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/reservationsalles.css">
    <title>Inscription</title>
</head>

<body>
    <?php
    session_start();
    require "../require/header.php";
    ?>
    <main>
        <div class="contentform">
        <?php 
                 if (isset($_GET['err1'])) {
                 ?>
                    <div class="messerror">
                        <p> Inscription impossible, confirmation du mot de passe incorrecte!</p>
                    </div>
            <?php } elseif (isset($_GET['err2'])) {
                 ?>
                    <div class="messerror">
                        <p> Inscription impossible login déjà existant!</p>
                    </div>
            <?php }  elseif (isset($_GET['err3'])) {
                 ?>
                    <div class="messerror">
                        <p> Inscription impossible, vueillez remplir les champs!</p>
                    </div>
            <?php } elseif (isset($_GET['err4'])) {?>
                    <div class="messerror">
                        <p> Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer!</p>
                    </div>
            <?php } ?>?>
            <div class="formcard">
                <form action="../traitement/traitement-inscription.php" method="POST">
                    <div class="padding">
                        <h1>Inscription</h1>
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
                        <input type="submit" id='submit' name="submit" value='INSCRIPTION'>
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