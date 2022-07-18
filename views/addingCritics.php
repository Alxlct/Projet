<?php
include('../elements/meta.php')
?>

<body>
    <header>

        <?php
        include('../elements/navbar.php')
        ?>
        <div class="row justify-content-center p-0 m-0 text-center my-5">
            <div class="col-10 bg-frag rounded shadow">
                <h1 class="text-center m-5">Bienvenue dans un monde parfumé</h1>
                <p class="text-center m-5"><i>Sur cette page vous retrouverez les actualités les plus récentes liées au monde de la parfumerie moderne.
                        <br>Vous pouvez aussi vous rendre sur la page <a class="text-dark" href="critics.php">Critiques</a> afin de lire les avis postés par les utilisateurs.<br>Créez votre compte sur l'onglet <a class="text-dark" href="login.php">Connexion</a> si vous souhaitez ajouter vos propres critiques.<i></p>
            </div>
        </div>
    </header>
    <div class="row d-flex justify-content-evenly p-0 m-0 mt-3">
        <div class="col-11 my-2 border border-secondary text-center justify-content-evenly bg-rose rounded">
            <div class="row p-0 m-0">
                <div class="col-lg-4">
                    <div class="card my-3 mx-auto text-center shadow rounded" style="width: 18rem;">
                        <img src="../assets/img/Scandal.webp" class="card-img-top" alt="Jean Paul Gaultier Scandal">
                        <div class="card-body">
                            <h2 class="card-title fs-4">Jean Paul Gaultier Scandal Parfum</h2>
                            <p class="card-text">Suite au succès de sa nouvelle gamme Scandal, les deux modèles Homme et Femme se verront déclinés en versions Parfum.</p>
                            <button class="bt-rose border border-light py-2 px-3 rounded" data-bs-toggle="modal" data-bs-target="#article1">
                                En apprendre plus
                            </button>
                            <div class="modal fade" id="article1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLabel">Scandal Parfum</h2>
                                        </div>
                                        <div class="modal-body">
                                            La version féminine comporte des notes de Jasmin, Caramel Beurre Salé, Vanille, Miel, Bois de Santal, Fève Tonka et Tubéreuse.
                                            <br>La version masculine comporte des notes de Sauge Sclarée, Caramel Beurre Salé et Vetiver.
                                            <br>Les deux modèles sont disponibles en format 30 - 50 et 100 ML.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Retour</button>
                                            <button class="bt-rose border border-light py-2 px-3 rounded"> <a class="text-light text-decoration-none" href="https://www.jeanpaulgaultier.com/fr/fr/fragrances/scandal-les-parfums-ready-to-shake-the-world"> Visiter le site de la marque</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="card my-3 mx-auto text-center shadow rounded" style="width: 18rem;">
                        <img src="../assets/img/LanvinMonEclat.webp" class="card-img-top" alt="Jean Paul Gaultier Scandal">
                        <div class="card-body">
                            <h2 class="card-title fs-4">Lanvin Mon Eclat <br>Eclat d'Arpege</h2>
                            <p class="card-text">On a fêté en 2022 les 20 ans du classique Eclat Arpège de Lanvin. Raison pour laquelle la marque a décidé de le rajeunir.</p>
                            <button class="bt-rose border border-light py-2 px-3 rounded" data-bs-toggle="modal" data-bs-target="#article2">
                                En apprendre plus
                            </button>
                            <div class="modal fade" id="article2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLabel">Mon Eclat - Eclat d'Arpège</h2>
                                        </div>
                                        <div class="modal-body">
                                            Aloe Vera, Bergamote, Abricot, Jasmin, Rose, Musc et Bois de Santal, voici les notes qui composent cette nouvelle itération d'Eclat d'Arpège.
                                            <br>Les deux modèles sont disponibles en format 30 - 50 et 100 ML.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Retour</button>
                                            <button class="bt-rose border border-light py-2 px-3 rounded"> <a class="text-light text-decoration-none" href="https://www.lanvin.com/fr/"> Visiter le site de la marque</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-3 mx-auto text-center shadow rounded" style="width: 18rem;">
                        <img src="../assets/img/Amouage-tobacco.webp" class="card-img-top" alt="Amouage Royal Tobacco">
                        <div class="card-body">
                            <h2 class="card-title fs-4">Amouage OPUS XIV<br>Royal Tobacco</h2>
                            <p class="card-text">La dernière création de la marque omanie est une lettre d'amour aux senteurs orientales</p>
                            <button class="bt-rose border border-light py-2 px-3 rounded" data-bs-toggle="modal" data-bs-target="#article3">
                                En apprendre plus
                            </button>
                            <div class="modal fade" id="article3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLabel">Amouage - Royal Tobacco</h2>
                                        </div>
                                        <div class="modal-body">
                                            Encens, Résine d'Elemi, Cardamome, Anis, Basilic, Feuille de Tabac, Lavande, Oud, Fleur d'Oranger, Rose, Vétiver, voici les notes qui composent ce parfum.
                                            <br>Disponible en format 100 ML.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Retour</button>
                                            <button class="bt-rose border border-light py-2 px-3 rounded"> <a class="text-light text-decoration-none" href="https://www.amouage.com/opus-xiv-royal-tobacco.html"> Visiter le site de la marque</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('../elements/footer.php')
    ?>


</body>

</html>