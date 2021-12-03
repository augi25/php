<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="style_sign_in.css">
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>S'inscrire</header>
            <form action="save.php" method="POST">
                <div class="name-details">
                    <div class="field input">
                        <label>Nom</label>
                        <input type="text" placeholder="Nom" name="nom">
                    </div>
                    <div class="field input">
                        <label>Prenom</label>
                        <input type="text" placeholder="Prenom" name="prenom">
                    </div>
                </div>
                <div class="field input">
                    <label>Adresse Email</label>
                    <input type="email" placeholder="Entrer votre adresse email" name="email">
                </div>
                <div class="field input">
                    <label>Mot de passe</label>
                    <input type="password" placeholder="Entrer un mot de passe" name="pass">
                </div><div class="field input">
                    <label>Confirmation mot de passe</label>
                    <input type="password" placeholder="Entrer le mot de passe" name="pass_retype">
                </div>
                <div class="field button">
                    <input type="submit" value="Inscription">
                </div>
            </form>
            <div class="link">Vous avez déjà un compte? <a href="sign_up.php">Connectez-vous ici </a></div>
        </section>
    </div>
</body>

</html>