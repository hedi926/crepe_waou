<?php

require_once __DIR__ . '/../app/router.php';  
require_once __DIR__ . '/../app/controllers/MainController.php';  
require_once __DIR__ . '/../app/controllers/ConnexionController.php';
require_once __DIR__ . '/../app/controllers/InscriptionController.php';
require_once __DIR__ . '/../app/controllers/ProduitController.php';
require_once __DIR__ . '/../app/controllers/PanierController.php';

$router = require_once __DIR__ . '/../app/router.php';

$match = $router->match();


if ($match) {
    
    list($controllerName, $method) = explode('#', $match['target']);

    
    $controller = new $controllerName();
    $controller->$method();
} else {
    
    (new MainController())->notFound();
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-cig Store</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">E-cig Store</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="/ServeurWeb/crepe_waou/public/home">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ServeurWeb/crepe_waou/public/catalogue.php">Catalogue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ServeurWeb/crepe_waou/public/produit">Nos Produits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ServeurWeb/crepe_waou/public/connexion">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ServeurWeb/crepe_waou/public/inscription">Inscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ServeurWeb/crepe_waou/public/panier">Panier</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="container py-5">
      <div class="text-center">
        <h1 class="display-4">Bienvenue chez E-cig Store</h1>
        <p class="lead">
          Trouvez les meilleures cigarettes électronique de toute la France.
        </p>
        <a href="catalogue.html" class="btn btn-primary btn-lg"
          >Explorer le catalogue</a
        >
      </div>
    </main>

    <footer>
      <p>&copy; 2024 E-cig Store</p>
    </footer>
  </body>
</html>
