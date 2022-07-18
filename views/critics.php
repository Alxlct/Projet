<?php
include('../elements/meta.php')
?>

<body>
  <header>
    <?php
    include('../elements/navbar.php')
    ?>
    <div class="row justify-content-center text-center p-0 m-0 my-5">
      <div class="col-10 bg-frag rounded shadow">
        <h1 class="text-center m-5">Bienvenue dans l'onglet Critiques</h1>
        <p class="text-center m-5"><i>Sur cette page vous retrouverez toutes les critiques rédigées par les utilisateurs. <br>Vous pouvez aussi vous rendre sur la page <a class="text-dark" href="home.php">Actualités</a> afin de vous tenir informé der dernières sorties.<br>Créez votre compte sur l'onglet <a class="text-dark" href="login.php">Connexion</a> si vous souhaitez ajouter vos propres critiques.<i></p>
      </div>
    </div>
  </header>



  <div class="row d-flex justify-content-evenly p-0 m-0 mt-3">
    <div class="col-11 my-2 border border-secondary text-center justify-content-evenly bg-rose rounded">
      <div class="row d-flex justify-content-evenly p-0 m-0">

        <div class="col-lg-4">
          <div class="card mt-5 mx-auto text-center shadow-lg" style="width: 18rem;">
            <img src="/assets/img/DiorHommeIntense.webp" class="card-img-top mt-3" alt="DiorHommeIntense">
            <div class="card-body">
              <h5 class="card-title">Dior Homme Intense</h5>
              <p class="card-text">Critique Rédigée par Anonyme</p>
              <button class="bt-rose border border-light py-2 px-3 rounded" data-bs-toggle="modal" data-bs-target="#article1"> Lire la critique</button>
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
                      <button class="bt-rose border border-light py-2 px-3 rounded">Acheter ce parfum</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-5 mx-auto text-center shadow-lg" style="width: 18rem;">
            <img src="/assets/img/HermesVoyage.webp" class="card-img-top mt-3" alt="Hermès Voyage">
            <div class="card-body">
              <h5 class="card-title">Hermès Voyage</h5>
              <p class="card-text">Critique Rédigée par Anonyme</p>
              <button class="bt-rose border border-light py-2 px-3 rounded" data-bs-toggle="modal" data-bs-target="#article2">Lire la critique</button>
              <div class="modal fade" id="article2" tabindex="-1" aria-labelledby="modalCritique" aria-hidden="true">
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
                      <button class="bt-rose border border-light py-2 px-3 rounded">Acheter ce parfum</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-5 mx-auto text-center shadow-lg" style="width: 18rem;">
            <img src="/assets/img/BleuElectrique.webp" class="card-img-top mt-3" alt="YSL LNDL Bleu Electrique">
            <div class="card-body">
              <h5 class="card-title">Yves Saint Laurent <br> La Nuit de l'Homme Bleu Electrique</h5>
              <p class="card-text">Critique Rédigée par Anonyme</p>
              <button class="bt-rose border border-light py-2 px-3 rounded" data-bs-toggle="modal" data-bs-target="#article3"> Lire la critique</button>
              <div class="modal fade" id="article3" tabindex="-1" aria-labelledby="modalCritique" aria-hidden="true">
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
                      <button class="bt-rose border border-light py-2 px-3 rounded">Acheter ce parfum</button>
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
  <!-- COPY PASTE -->
























  <?php
  include('../elements/footer.php')
  ?>

</body>

</html>