<?php

class ProduitController
{
    public function catalogue()
    {
        $produits = ['Produit1', 'Produit2', 'Produit3'];  // Exemple statique
        $this->render('catalogue', ['produits' => $produits]);
    }

    public function showProduit($id)
    {
        $produit = "Produit " . $id;  
        $this->render('produit', ['produit' => $produit]);
    }

    private function render($view, $data = [])
    {
        extract($data);
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "Vue introuvable: $view";
        }
    }
}
