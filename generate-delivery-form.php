<?php

$nom = htmlspecialchars($_POST['name']);
$adress = htmlspecialchars($_POST['adress']);
$codePostal = htmlspecialchars($_POST['codePostal']);
$ville = htmlspecialchars($_POST['ville']);
$pays = htmlspecialchars($_POST['pays']);
$comm = htmlspecialchars($_POST['comm']);

// var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <!-- En tête -->
    <header>
        <h1 class="main-title">
            Delivr'Home
            <br /> Génération de bon livraison en ligne
        </h1>
    </header>

    <!-- Bon de livraison -->
    <section id="deliveryForm" class="container">
        <h2 class="title">Bon de livraison</h2>

        <div class="row">
            <p>N°
                <!-- A FAIRE: Afficher le numéro ici -->
               <?php echo mb_strtoupper(substr($nom, 0, 3)) .'-'. mb_strtoupper($ville) .'-'. date('jmY') .'-'. rand(00,99) ?>
            </p>
            <p>Généré le
                <!-- A FAIRE: Afficher la date ici -->
              <?= date('t/h/Y'); ?>
            </p>
        </div>

        <div class="row">
            <div>
                <h3>Destination :</h3>
                
                <p>
                    <?= $nom ?>
                    <!-- A FAIRE: Afficher le destinataire ici-->
                </p>
                <p>
                    <?= $adress ?>
                    <!-- A FAIRE: Afficher le numéro et la rue ici -->
                </p>
                <p>
                    <?= $codePostal ?>
                    <!-- A FAIRE: Afficher le code postal ici -->
                </p>
                <p>
                    <?= $ville ?>
                    <!-- A FAIRE: Afficher la ville ici -->
                </p>
                <p>
                    <?= $pays ?>
                    <!-- A FAIRE: Afficher le pays ici -->
                </p>
            </div>
            <div>
                <h3>Provenance : </h3>
                <p>
                    DELIVR HOME LIMITED
                </p>
                <p>
                    221B Baker Street
                </p>
                <p>
                    NW1
                </p>
                <p>
                    London
                </p>
                <p>
                    England
                </p>
            </div>
        </div>

        <div class="comment">
            <p>
                <?= $comm ?>
                <!-- A FAIRE: Afficher le commentaire ici -->
            <p>
        </div>
    </section>
</body>

</html>