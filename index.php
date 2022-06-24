
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Delivr'Home | Créer un bon</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <!-- En tête -->
    <header>
        <h1 class="main-title">
            Delivr'Home
            <br /> Génération de bons de livraison en ligne
        </h1>
    </header>

    <!-- Formulaire de génération du bon de livraison -->
    <section id="formContainer">
        <div class="container">
            <p class="text-content">
                Bienvenue sur Delivr' Home,
                <br /> Pour générer un bon de livraison, remplissez le formulaire ci-dessous :
            </p>
        </div>

        <div class="container">
            <h2 class="title">Générer un bon de livraison</h2>
            <form action="generate-delivery-form.php" method="POST">
                <!-- 
                    A FAIRE: Compléter le formulaire afin qu'il permette de saisir 
                    les informations requises:
                    - Nom du destinataire
                    - Adresse (numero et rue)
                    - Code postal
                    - Ville
                    - Pays
                    - Commentaire
                -->
                <label for="name">Nom du destinataire</label>
                <input type="text" name="name" id="name">

                <label for="adress">Adresse</label>
                <input type="text" name="adress" id="adress">

                <label for="codePostal">Code postal</label>
                <input type="text" name="codePostal" id="codePostal">

                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville">

                <label for="pays">Pays</label>
                <input type="text" name="pays" id="pays">

                <label for="comm">Commentaire</label>
                <input type="textarea" name="comm" id="comm">
                

                <input class="submit-button" type="submit" value="Valider" />
            </form>
        </div>
    </section>
</body>

</html>