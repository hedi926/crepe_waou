<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panier</title>
    <link rel="stylesheet" href="../../public/css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
    <main>
      <h2>Votre Panier</h2>
      <div id="panier-contenu"></div>
      <button class="btn btn-primary">Passer à la caisse</button>
    </main>

 <?php include 'footer.php'; ?>

    <script>
      function afficherPanier() {
        const panier = JSON.parse(localStorage.getItem("panier")) || [];
        const panierContenu = document.getElementById("panier-contenu");
        if (panier.length === 0) {
          panierContenu.innerHTML = "<p>Votre panier est vide.</p>";
        } else {
          panierContenu.innerHTML = "";
          panier.forEach((produit, index) => {
            const produitDiv = document.createElement("div");
            produitDiv.classList.add("produit-panier");
            produitDiv.innerHTML = `
              <p>${produit.nom} - ${produit.prix}</p>
              <button class="btn btn-danger" onclick="retirerDuPanier(${index})">Retirer</button>
            `;
            panierContenu.appendChild(produitDiv);
          });
        }
      }

      function retirerDuPanier(index) {
        const panier = JSON.parse(localStorage.getItem("panier")) || [];
        panier.splice(index, 1);
        localStorage.setItem("panier", JSON.stringify(panier));
        afficherPanier();
      }

      window.onload = afficherPanier;
    </script>

</body>
</html>
