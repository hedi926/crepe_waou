<?php

class InscriptionModel
{
    
    private $db;

    public function __construct()
    {
        
        $this->db = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
    }


    public function registerUser($nom, $email, $password)
    {
   
        $stmt = $this->db->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return false; 
        }

        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        
        $stmt = $this->db->prepare("INSERT INTO utilisateurs (nom, email, password) VALUES (:nom, :email, :password)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        return $stmt->execute();
    }

    
    public function loginUser($email, $password)
    {
        
        $stmt = $this->db->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            
            if (password_verify($password, $user['password'])) {
                return $user; 
            }
        }

        return false; 
    }
}
?>