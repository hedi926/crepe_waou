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
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="card p-4 shadow-lg" style="width: 100%; max-width: 500px">
        <h1 class="text-center mb-4">Inscription</h1>
        <form>
          <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input
              type="text"
              class="form-control"
              id="nom"
              placeholder="Entrez votre nom"
              required
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Entrez votre email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="Choisissez un mot de passe"
              required
            />
          </div>
          <div class="mb-3">
            <label for="confirm-password" class="form-label">Confirmez le mot de passe</label>
            <input
              type="password"
              class="form-control"
              id="confirm-password"
              placeholder="Confirmez votre mot de passe"
              required
            />
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">S'inscrire</button>
          </div>
        </form>
        <div class="text-center mt-3">
          <p class="text-muted">
            Vous avez déjà un compte ?
            <a href="/ServeurWeb/crepe_waou/public/connexion" class="text-decoration-none">Connectez-vous</a> <br>
            <a href="/ServeurWeb/crepe_waou/public/catalogue.php" class="text-decoration-none">Connectez-vous plus tard</a>
          </p>
        </div>
      </div>
    </div>
</body>
</html>
