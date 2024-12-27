<?php

class PanierModel
{
    
    private $db;

    public function __construct()
    {
        
        $this->db = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
    }


    public function getPanier($userId)
    {
        
        $stmt = $this->db->prepare("SELECT * FROM panier WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProduitToPanier($userId, $produitId, $quantite)
    {
        
        $stmt = $this->db->prepare("SELECT * FROM panier WHERE user_id = :user_id AND produit_id = :produit_id");
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':produit_id', $produitId);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            
            $stmt = $this->db->prepare("UPDATE panier SET quantite = quantite + :quantite WHERE user_id = :user_id AND produit_id = :produit_id");
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':produit_id', $produitId);
            $stmt->bindParam(':quantite', $quantite);
            return $stmt->execute();
        } else {
            
            $stmt = $this->db->prepare("INSERT INTO panier (user_id, produit_id, quantite) VALUES (:user_id, :produit_id, :quantite)");
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':produit_id', $produitId);
            $stmt->bindParam(':quantite', $quantite);
            return $stmt->execute();
        }
    }

    
    public function removeProduitFromPanier($userId, $produitId)
    {
        $stmt = $this->db->prepare("DELETE FROM panier WHERE user_id = :user_id AND produit_id = :produit_id");
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':produit_id', $produitId);
        return $stmt->execute();
    }
}

?>