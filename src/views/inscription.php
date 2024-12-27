<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../public/css/inscription.css">
</head>
<body>
<?php include 'header.php'; ?>
    <main>
        <div class="form-container">
            <h2>Créer un compte</h2>
            <form action="process_register.php" method="POST">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required placeholder="Votre nom">

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required placeholder="Votre prénom">

                <label for="email">Adresse email :</label>
                <input type="email" id="email" name="email" required placeholder="Votre email">

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required placeholder="Créer un mot de passe">

                <label for="confirm_password">Confirmer le mot de passe :</label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirmez votre mot de passe">

                <button type="submit">S'inscrire</button>
            </form>
            <p>Vous avez déjà un compte ? <a href="/ServeurWeb/Projet-ServeurWeb-Hedi/src/views/connexion">Se connecter</a></p>
        </div>
    </main>
</body>
</html>
