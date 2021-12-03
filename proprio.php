<?php
session_start();
if (isset($_GET['idClient'])) {
    $pseudo = htmlspecialchars($_GET['idClient']);
} else header('Location:index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil CarLOCATE.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-car"></i> CarLOCATE. </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="reservations.php">Réservations</a>
            <a href="logout.php">Donnexion</a>
            <a href="new_cars.php">Ajouter une voiture</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>
    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img.svg" alt="">
        </div>

        <div class="content">
            <h3>stay safe, stay healthy</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sed autem vero? Magnam, est laboriosam!</p>
            <a href="#" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
        </div>

    </section>
    <section class="cars" id="cars">

        <h1 class="heading"> Listes des <span>Voitures</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/img-.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="img/img-.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="img/img-.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>