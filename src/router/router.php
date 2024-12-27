<?php

require_once __DIR__ . '/../controllers/MainController.php';  

$router = new AltoRouter();

$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$router->setBasePath($basePath);

$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/connexion', 'ConnexionController#showConnexion', 'connexion');
$router->map('POST', '/connexion', 'ConnexionController#processConnexion', 'connexion_post');
$router->map('GET', '/inscription', 'InscriptionController#showInscription', 'inscription');
$router->map('POST', '/inscription', 'InscriptionController#processInscription', 'inscription_post');
$router->map('GET', '/catalogue', 'ProduitController#catalogue', 'catalogue');
$router->map('GET', '/produit/[i:id]', 'ProduitController#showProduit', 'produit_detail');
$router->map('GET', '/panier', 'PanierController#showPanier', 'panier');
$router->map('POST', '/panier', 'PanierController#addToPanier', 'panier_add');

return $router;
?>