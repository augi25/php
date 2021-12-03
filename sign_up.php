<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style_sign_up.css">
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Connexion</header>
            <form action="connect.php" method="POST">
                <div class="field input">
                    <label>Adresse Email</label>
                    <input type="email" placeholder="Entrer votre adresse email" name="email">
                </div>
                <div class="field input">
                    <label>Mot de passe</label>
                    <input type="password" placeholder="Entrer votre mot de passe" name="pass">
                </div>
                <div class="field button">
                    <input type="submit" value="Se connecter">
                </div>
            </form>
            <div class="link">Vous avez oublier votre mot de passe? <a href="MDP_forgot.php">Cliquer-ici !</a></div>
        </section>
    </div>
</body>

</html>