<?php

require_once __DIR__ . '/../src/router/router.php';  

$router = require_once __DIR__ . '/ServeurWeb/Projet-ServeurWeb-Hedi/router/router.php';

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

    <!-- faire le header -->

    <main class="container py-5">
      <div class="text-center">
        <h1 class="display-4">Bienvenue chez E-cig Store</h1>
        <p class="lead">
          Trouvez les meilleures cigarettes électronique de toute la France.
        </p>
        <a href="/ServeurWeb/PROJET-SERVEURWEB-HEDI/public/catalogue" class="btn btn-primary btn-lg"
          >Explorer le catalogue</a
        >
      </div>
    </main>
    
    <?php include 'footer.php'; ?>

  </body>
</html>
