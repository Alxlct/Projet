<?php session_start(); ?>

<?php include('../elements/meta.php') ?>

<body class="d-flex flex-column min-vh-100 log">
    <header>

        <?php include('../elements/navbar.php') ?>

        <div class="row d-flex justify-content-evenly p-0 m-0 mt-3">
        <div class="col-11 my-2 border border-secondary text-center justify-content-evenly bg-rose rounded">
                <!-- Formulaire de connexion -->
                <form class="mb-5" action="" method="POST">
                    <h1 class="text-center p-3 my-5">Connexion au site</h1>
                    <div class="row justify-content-center pt-2">
                        <div class="col-lg-3 col-9 bg-light border border-secondary rounded shadow p-4">

                            <div class="my-2">
                                <label for="login">Identifiant</label><span class="ms-2 text-danger"><?= isset($errors['login']) ? $errors['login'] : '' ?></span>
                                <br>
                                <input type="text" id="login" name="login" placeholder="ex. DURANT">
                            </div>

                            <div class="my-2">
                                <label for="password">Mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                                <br>
                                <input type="password" id="password" name="password">
                            </div>
                            <div class="mt-4">
                                <input type="checkbox" id="stayConnected" name="stayConnected">
                                <label for="stayConnected">Rester connecté</label>
                            </div>
                            <button class="bt-rose border border-light my-2 py-2 px-3 rounded">Connexion</button>
                            <div class="text-center">
                                <a class="text-decoration-none text-secondary" href="home.php">Retour <i class="bi bi-house-heart-fill"></i> Accueil</a>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
        <?php include '../elements/footer.php' ?>

</body>

</html>