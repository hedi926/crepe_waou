<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">
        <?= $_SESSION['error']; ?>
        <?php unset($_SESSION['error']); ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../../public/css/connexion.css">
</head>
<body>

<?php include 'header.php'; ?>

    <main>
        <div class="form-container">
            <h2>Connexion</h2>
            <form action="process_login.php" method="POST">
                <label for="email">Adresse email :</label>
                <input type="email" id="email" name="email" required placeholder="Votre email">

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required placeholder="Votre mot de passe">

                <button type="submit">Se connecter</button>
            </form>
            <p>Pas encore de compte ? <a href="/ServeurWeb/Projet-ServeurWeb-Hedi/src/views/inscription">S'inscrire</a></p>
        </div>
    </main>
</body>
</html>