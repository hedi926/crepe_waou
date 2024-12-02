<?php

class InscriptionController
{
    public function afficherInscription()
    {
        $this->render('inscription');
    }

    public function inscrire()
    {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];

        if ($password !== $confirmPassword) {
            $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
            header("Location: /inscription");
            exit;
        }

        $_SESSION['user'] = [
            'nom' => $nom,
            'email' => $email
        ];

        header("Location: /");
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
