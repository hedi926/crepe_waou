<?php

namespace src\controllers;

use src\models\ConnexionModel;
use src\models\InscriptionModel;
use src\models\PanierModel;
use src\models\ProduitModel;

class CoreController 
{
    public function show($viewName, $viewData = [])
    {
        $absoluteURL = $_SERVER['BASE_URI'];
        global $router;
        $connexionModel = new Connexion();
        $connexion = $connexionModel->findAll();
        $inscriptionModel = new Inscription();
        $inscription = $inscriptionModel->findAll();
        $panierModel = new Panier();
        $panier = $panierModel->findAll();

        require_once __DIR__ . "/../views/header.php";
        require_once __DIR__ . "/../views/footer.php";
    }
}