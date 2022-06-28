<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
              <a class="nav-link active" href="login.php"><i class="bi bi-person-circle"></i>Connexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- @@@ Main Title @@@ -->

    <h1 class="text-center m-5">Bienvenue dans un monde Parfumé</h1>


  </header>


  <div class="container bg-light">
    <div class="row d-flex justify-content-evenly p-0 m-0">

  <!-- @@@ news @@@ -->


    <div class="col-lg-4">
      <div class="card my-3 mx-auto text-center shadow" style="width: 18rem;">
        <img src="assets/img/Scandal.webp" class="card-img-top" alt="Jean Paul Gaultier Scandal">
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
                  <button type="button"  class="btn btn-info text-light"> <a class="text-light text-decoration-none" href="https://www.jeanpaulgaultier.com/fr/fr/fragrances/scandal-les-parfums-ready-to-shake-the-world"> Visiter le site de la marque</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4">
      <div class="card my-3 mx-auto text-center shadow" style="width: 18rem;">
        <img src="assets/img/LanvinMonEclat.webp" class="card-img-top" alt="Jean Paul Gaultier Scandal">
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
                  <button type="button"  class="btn btn-info text-light"> <a class="text-light text-decoration-none" href="https://www.lanvin.com/fr/"> Visiter le site de la marque</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

</div>
  <script src="script.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>