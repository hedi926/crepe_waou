<?php

class ConnexionController
{
    public function afficherConnexion()
    {
        if ($this->estConnecte()) {
            header("Location: /");
            exit;
        }

        $this->render('connexion');
    }

    public function connecter()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $connexionModel = new ConnexionModel();
        $utilisateur = $connexionModel->verifierUtilisateur($email, $password);

        if ($utilisateur) {
            $connexionModel->connecterUtilisateur($utilisateur);
            header("Location: /");
            exit;
        } else {
            $_SESSION['error'] = "Email ou mot de passe incorrect";
            header("Location: /connexion");
            exit;
        }
    }

    public function deconnecter()
    {
        $connexionModel = new ConnexionModel();
        $connexionModel->deconnecterUtilisateur();
        header("Location: /");
        exit;
    }

    private function estConnecte()
    {
        $connexionModel = new ConnexionModel();
        return $connexionModel->estConnecte();
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
