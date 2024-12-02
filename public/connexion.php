

<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">
        <?= $_SESSION['error']; ?>
        <?php unset($_SESSION['error']); ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center p-6 min-vh-100">
      <div class="card p-4 shadow-lg" style="width: 100%; max-width: 500px">
        <h1 class="text-center mb-4">Connexion</h1>
<form method="POST" action="/ServeurWeb/crepe_waou/public/connexion">
    <label for="email">E-mail</label>
    <input type="email" name="email" required />
    <br>
    <br>
    <label for="password">Mot de passe</label>
    <input type="password" name="password" required />
    <br>
    <br>
    <button type="submit">Se connecter</button>
    <br>
    <br>
    <a href="/ServeurWeb/crepe_waou/public/catalogue" class="text-decoration-none">Connectez-vous plus tard</a>
</div>
</div>
</form>
</body>
</html>
