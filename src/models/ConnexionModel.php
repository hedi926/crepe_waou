<?php

class ConnexionModel
{
 
    public function verifierUtilisateur($email, $password)
    {

        $utilisateurs = [
            'utilisateur@example.com' => [
                'nom' => 'John Doe',
                'mot_de_passe' => password_hash('password123', PASSWORD_DEFAULT) 
            ]
        ];


        if (isset($utilisateurs[$email])) {

            if (password_verify($password, $utilisateurs[$email]['mot_de_passe'])) {
                return [
                    'email' => $email,
                    'nom' => $utilisateurs[$email]['nom']
                ];
            }
        }

        
        return null;
    }

    
    public function connecterUtilisateur($utilisateur)
    {
        
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        
        $_SESSION['utilisateur'] = $utilisateur;
    }

    
    public function estConnecte()
    {
        return isset($_SESSION['utilisateur']);
    }

    
    public function deconnecterUtilisateur()
    {
        
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        
        session_unset();
      
        session_destroy();
    }
}
?>

