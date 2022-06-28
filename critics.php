<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/criticsStyle.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Magazine de Parfums, Critiques et Actualités... </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<header>

    <!-- @@@ Navbar @@@ -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid text-center border border-dark">
        <a class="navbar-brand"><img src="/assets/img/logo.png"></img></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse border border-danger fs-2 justify-content-center"
          id="navbarSupportedContent">
          <ul class="navbar-nav mb-lg-0 border border-dark">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="critics.php">Critiques</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active"><i class="bi bi-person-circle"></i>Connexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- @@@ Main Title @@@ -->

    <h1 class="text-center m-5">Ici vous trouverez les critiques</h1>
  </header>






<div class="row d-flex justify-content-evenly p-0 m-0">

    <div class="col-lg-4">
      <div class="card mt-5 mx-auto text-center shadow-lg" style="width: 18rem;">
        <img src="/assets/img/DiorHommeIntense.webp" class="card-img-top mt-3" alt="DiorHommeIntense">
        <div class="card-body">
          <h5 class="card-title">Dior Homme Intense</h5>
          <p class="card-text">Critique Rédigée par Anonyme</p>
          <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#article1"> Lire la critique</button>
          <div class="modal fade" id="article1" tabindex="-1" aria-labelledby="modalCritique" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title text-center" id="modalCritique">Lorem ipsum dolor sit amet</h2>
                </div>
                <div class="modal-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla vitae eum ab vero ea quam exercitationem nihil deleniti molestiae laboriosam qui, voluptatem placeat debitis iure, doloribus minima libero quisquam nemo?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Retour</button>
                  <button type="button" class="btn btn-info text-light">Acheter ce parfum</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





  </div>
<!-- COPY PASTE -->
























<script src="script.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>