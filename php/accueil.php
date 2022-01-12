<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/reservationsalles.css">
    <title>Accueil</title>
</head>
<body>
    <?php
    session_start();
    require "../require/header.php";
    ?>
    <main class="maincontener">
        <section class="maincard">
           <div class="mainmarge flexdiv"> <h1>LA BONNE INFORMATION AU BON MOMENT</h1></div>
           <div class="mainmarge"> <h4> La recherche d’une salle adéquate peut être la source d’une perte considérable de temps et de productivité.</h4> </div>
           <div class="mainmarge"> <h4> Notre solution innovante RESERVED met un terme aux doutes et fournit des informations claires. Au bon endroit, au bon moment.</h4> </div>
           <div class="mainmarge flexdiv"> <div class="buttonmain"><h2> Reservez votre salle ! </h2></div></div>
        </section>
       <section class="maincard">
            <img class= "sizelogo" src="../asset/images/res1.jpg" alt="">
        </section>

    </main>
    
    <?php
    require "../require/footer.php";
    ?>
</body>
</html>