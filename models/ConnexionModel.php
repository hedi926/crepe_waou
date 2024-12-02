<?php

class ConnexionModel
{
 
    public function verifierUtilisateur($email, $password)
    {

        $utilisateurs = [
            'utilisateur@example.com' => [
                'nom' => 'John Doe',
                'mot_de_passe' => password_hash('password123', PASSWORD_DEFAULT) // Le mot de passe haché
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

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion - E-cigarettes</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEJv+PQx5dQzS8mZJz9uHl+J1gZ2tUmdAcq2LzE1nWmM9RYg5v9XjjDYf+L/4"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <h1>E-cig Store</h1>
      <nav>
        <a href="index.html">Accueil</a>
        <a href="catalogue.html">Catalogue</a>
        <a href="inscription.html">Inscription</a>
      </nav>
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
      />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </header>
    <div class="card">
      <div class="card-header">
        <h4>Connexion</h4>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Email"
              required
            />
          </div>
          <div class="mb-3">
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="Mot de passe"
              required
            />
          </div>
          <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
        <div class="text-center mt-3">
          <a href="#">Mot de passe oublié ?</a>
          <p>Pas encore de compte ? <a href="#">Créer un compte</a></p>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz4fnFO9gybBcyfLXOVu0a9fyj3JlKYmYt0pKwsl+qFqz6X9BdZh+v9A2M"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-pzjw8f+ua7Kw1TIq0D6w5QQVFdMzD72WXY4iWlCm3YJ8L4ob/a0rE0yN5TZhWwX9j"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
