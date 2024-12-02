<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catalogue</title>
    <link rel="stylesheet" href="catalogue.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <header>
      <h1>Catalogue</h1>
      <nav>
        <a href="/ServeurWeb/crepe_waou/public//home">Accueil</a>
        <a href="/ServeurWeb/crepe_waou/public/catalogue.php">Catalogue</a>
        <a href="/ServeurWeb/crepe_waou/public/produit">Nos Produits</a>
        <a href="/ServeurWeb/crepe_waou/public/panier">Panier</a>
      </nav>
    </header>
    <main>
      <div class="catalogue">
        <div class="produit">
          <img
            src="../images/vapexpro.jpeg"
            alt="Cigarette électronique 1"
            style="width: 150px; height: 150px"
          />
          <h2>VapeX Pro</h2>
          <p>Prix : 29,99 €</p>
          <button class="btn-catalogue">Acheter</button>
        </div>
        <div class="produit">
          <img
            src="../images/CloudWave3000.jpg"
            alt="Cigarette électronique 2"
            style="width: 150px; height: 150px"
          />
          <h2>CloudWave 3000</h2>
          <p>Prix : 39,99 €</p>
          <button class="btn-catalogue">Acheter</button>
        </div>
        <div class="produit">
          <img
            src="../images/VaporSky Elite.jpg"
            alt="Cigarette électronique 3"
            style="width: 150px; height: 150px"
          />
          <h2>VaporSky Elite</h2>
          <p>Prix : 49,99 €</p>
          <button class="btn-catalogue">Acheter</button>
        </div>
      </div>
    </main>
  </body>
  <script>
    function ajouterAuPanier(nom, prix) {
      let panier = JSON.parse(localStorage.getItem("panier")) || [];
      const produit = { nom, prix };
      panier.push(produit);
      localStorage.setItem("panier", JSON.stringify(panier));
      alert(`${nom} a été ajouté au panier !`);
    }

    const boutonsAcheter = document.querySelectorAll(".btn-catalogue");
    boutonsAcheter.forEach((button, index) => {
      button.addEventListener("click", () => {
        const produit = document.querySelectorAll(".produit")[index];
        const nom = produit.querySelector("h2").textContent;
        const prix = produit.querySelector("p").textContent.split(" : ")[1];
        ajouterAuPanier(nom, prix);
      });
    });
  </script>
</html>