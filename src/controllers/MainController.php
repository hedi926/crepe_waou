<?php

namespace src\controllers;

use src\models\ConnexionModel;
use src\models\InscriptionModel;
use src\models\PanierModel;
use src\models\ProduitModel;

use src\utils\Database;
use PDO;

class MainController extends CoreController
{

    public function home()
    {
        $connexionModel = new Connexion();

        $inscriptionModel = new Inscription();

        $panierModel = new Panier();

        $connexion = $connexionModel->findAll();

        $inscription = $inscriptionModel->findAll();

        $panier = $connexionModel->findAll();

        $this->show('home', [
            'connexion' => $connexion,
            'inscription' => $inscription,
            'panier' => $panier
        ]);
    }

    public function legalMentions()
    {
        $this->show('mentions');
    }
    public function produitList()
    {
        $produitModel = new Produit();

        $produit = $produitModel->findAll();

        dump($produit);
        $this->show('produit_list', [
            'produit' => $produit
        ]);
    }
    
}