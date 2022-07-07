<?php
include('../elements/meta.php')
?>

<?php
include('../elements/navbar.php')
?>

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
























<?php
include('../elements/footer.php')
?>

</body>

</html>