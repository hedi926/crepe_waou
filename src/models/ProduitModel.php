<?php

class ProduitModel
{
    private $db;

    public function __construct()
    {
        
        $this->db = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
    }

    public function getAllProduits()
    {
        $stmt = $this->db->prepare("SELECT * FROM produits");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getProduitById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM produits WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function addProduitToPanier($id, $quantite)
    {
       
    }
}
?>