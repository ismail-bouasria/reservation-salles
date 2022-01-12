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
    require "../require/header.php";
    ?>
    <main class="maincontener">
        <div class="contentform">
        <div class="contentform">
        <?php 
                 if (isset($_GET['err1'])) {
                 ?>
                    <div class="messerror">
                        <p> réservation vide</p>
                    </div>
            <?php } elseif (isset($_GET['err2'])) {
                 ?>
                    <div class="messerror">
                        <p> vous ne pouvez pas reservée la salle plus d'une heure!</p>
                    </div>
            <?php }  elseif (isset($_GET['err3'])) {
                 ?>
                    <div class="messerror">
                        <p> Cette date est déjà réservée !</p>
                    </div>
            <?php } 
                    if (isset($_GET['reservation'])) {
                 ?>
                    <div class="messregister">
                        <p> Votre réservation est enregistrée!</p>
                    </div>
            <?php } ?>
            <div class="formcard">

                <form action="../traitement/traitement-reservation.php" method="POST">
                    <div class="padding">
                        <h1>Réservation</h1>
                    </div>
                    <div class="padding">
                        <label><b>Titre</b></label>
                    </div>
                    <div class="padding">
                        <input type="text" placeholder="Entrer le titre" name="titre" required>
                    </div>

                    <div class="padding">
                        <label><b>Description</b></label>
                    </div>
                    <div class="padding">
                        <textarea name="description" cols="40" rows="5" placeholder="Description" name="description" required></textarea>
                    </div>
                    <div class="padding">
                        <label><b>Date </b></label>
                    </div>
                    <div class="padding">
                        <input type="date" min= "2021-12-20" max= "2021-12-24" name="date" required>
                    </div>
                    <div class="padding">
                        <label><b>Heure de début</b></label>
                    </div>
                    <div class="padding">
                        <select name="ddb">
                            <option value="">choisir votre heure </option>
                            <option value="08:00" >08:00</option>
                            <option value="09:00" >09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option> 
                        </select>
                    </div>
                    <div class="padding">
                        <label><b>Heure de Fin</b></label>
                    </div>
                    <div class="padding">
                    <select name="ddf" >
                            <option value="">choisir votre heure </option>
                            <option value="09:00" >09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option> 
                        </select>
                    </div>
                    <div class="padding">
                        <input type="submit" id='submit' name="reserver" value='RESERVATION'>
                    </div>
                </form>
            </div>
     </div>

     <form action=""></form>
    </main>

    <?php
    require "../require/footer.php";
    ?>
</body>