<?php

class PanierController
{
    public function afficherPanier()
    {
        $panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : [];

        $this->render('panier', ['panier' => $panier]);
    }

    public function ajouterAuPanier()
    {
        $produit = [
            'nom' => $_POST['nom'],
            'prix' => $_POST['prix']
        ];

        $_SESSION['panier'][] = $produit;

        header("Location: /panier");
        exit;
    }

    public function retirerDuPanier($index)
    {
        if (isset($_SESSION['panier'][$index])) {
            unset($_SESSION['panier'][$index]);
        }

        header("Location: /panier");
        exit;
    }

    private function render($view, $data = [])
    {
        extract($data);

        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "View not found: $view";
        }
    }
}
