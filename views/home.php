<?php
include('../elements/meta.php')
?>

<body>
    <header class="bg-frag">

        <?php
        include('../elements/navbar.php')
        ?>

        <h1 class="text-center m-5">Bienvenue dans un monde parfumé</h1>
        <p class="text-center m-5"><i>Sur cette page vous retrouverez les actualités les plus récentes liées au monde de la parfumerie moderne.
                <br>Vous pouvez aussi vous rendre sur la page <a class="text-dark" href="critics.php">Critiques</a> afin de lire les avis postés par les utilisateurs.<br>Créez votre compte sur l'onglet <a class="text-dark" href="login.php">Connexion</a> si vous souhaitez ajouter vos propres critiques.<i></p>
    </header class="mt-3">
    </div>
    <div class="container mt-3">
        <div class="row d-flex justify-content-evenly p-0 m-0">

            <!-- @@@ news @@@ -->


            <div class="col-lg-4">
                <div class="card my-3 mx-auto text-center shadow rounded border border-secondary" style="width: 18rem;">
                    <img src="../assets/img/Scandal.webp" class="card-img-top" alt="Jean Paul Gaultier Scandal">
                    <div class="card-body">
                        <h2 class="card-title fs-4">Jean Paul Gaultier Scandal Parfum</h2>
                        <p class="card-text">Suite au succès de sa nouvelle gamme Scandal, les deux modèles Homme et Femme se verront déclinés en versions Parfum.</p>
                        <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#article1">
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
                                        <button type="button" class="btn btn-info text-light"> <a class="text-light text-decoration-none" href="https://www.jeanpaulgaultier.com/fr/fr/fragrances/scandal-les-parfums-ready-to-shake-the-world"> Visiter le site de la marque</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="card my-3 mx-auto text-center shadow rounded border border-secondary" style="width: 18rem;">
                    <img src="../assets/img/LanvinMonEclat.webp" class="card-img-top" alt="Jean Paul Gaultier Scandal">
                    <div class="card-body">
                        <h2 class="card-title fs-4">Lanvin Mon Eclat <br>Eclat d'Arpege</h2>
                        <p class="card-text">On a fêté en 2022 les 20 ans du classique Eclat Arpège de Lanvin. Raison pour laquelle la marque a décidé de le rajeunir.</p>
                        <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#article2">
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
                                        <button type="button" class="btn btn-info text-light"> <a class="text-light text-decoration-none" href="https://www.lanvin.com/fr/"> Visiter le site de la marque</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card my-3 mx-auto text-center shadow rounded border border-secondary" style="width: 18rem;">
                    <img src="../assets/img/LanvinMonEclat.webp" class="card-img-top" alt="Jean Paul Gaultier Scandal">
                    <div class="card-body">
                        <h2 class="card-title fs-4">Lanvin Mon Eclat Eclat d'Arpege</h2>
                        <p class="card-text">On a fêté en 2022 les 20 ans du classique Eclat Arpège de Lanvin. Raison pour laquelle la marque a décidé de le rajeunir.</p>
                        <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#article2">
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
                                        <button type="button" class="btn btn-info text-light"> <a class="text-light text-decoration-none" href="https://www.lanvin.com/fr/"> Visiter le site de la marque</a></button>
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