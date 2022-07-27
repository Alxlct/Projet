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
                <h1 class="text-center m-5">Ajout d'une critique</h1>
                <p class="text-center m-5"><i>Sur cette page vous retrouverez la liste des parfums enregistés sur notre Site et pouvez, si vous avez un <a class="text-dark" href="login.php">compte<a>, rédiger votre propre critique.<i></p>
            </div>
        </div>
    </header>
    <div class="row d-flex justify-content-evenly p-0 m-0 mt-3">
        <div class="col-11 my-2 border border-secondary text-center justify-content-evenly bg-rose rounded">
            <div class="row my-1">
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/BleuElectrique.webp" alt="BleuElectrique">
                </div>
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/SpicebombExtreme.webp" alt="SpicebombExtreme">
                </div>
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/Layton.webp" alt="Layton">
                </div>
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/HermesVoyage.webp" alt="HermesVoyage">
                </div>
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/DiorHommeIntense.webp" alt="DiorHommeIntense">
                </div>
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/Aventus.webp" alt="Aventus">
                </div>

                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/Coromandel.webp" alt="Coromandel">
                </div>
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/CocoChanel.webp" alt="CocoChanel">
                </div>
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/GrandSoir.webp" alt="GrandSoir">
                </div>
                <div class="col-3 col-lg-2 py-1 ">
                    <img class="sizingImg rounded shadow" src="../assets/img/Herod.webp" alt="Herod">
                </div>
            </div>
        </div>

    </div>
    <?php
    include('../elements/footer.php')
    ?>


</body>

</html>