<?php
include 'parts/header.php';
?>
<div class="container">
  <div class="row d-flex justify-content-center mt-5">


{# template pour une future boucle php : #}
    <!-- Carte Offre -->
    <div class="card mb-3 mb-5" style="max-width: 135vh;">
      <div class="row g-0">

        <div class="col-4 overflow-hidden taille_img_service_offres">
          <!-- IMG -->
          <img src="https://picsum.photos/330/370" alt="ALEATOIR">
        </div>

        <div class="col-6">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>

      {# Ici besoin d'un margin right #}
        <div class="col-2 d-flex align-items-center ">
          <div>
            <a class="button_belleza" href="CoiffureOffres.php">Consulter</a>
          </div>

        </div>
      </div>
    </div>






<?php
include 'parts/footer.php';
?>