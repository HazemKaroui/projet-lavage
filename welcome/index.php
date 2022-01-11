<?php

define('TITLE', "Welcome");
include '../assets/layouts/header.php';

?>



<main role="main">

    <!-- Start Why Choose Us -->
   <div id="avantages" class="choose-us">
    <div class="container-fluid">
      <div class="row">
        <div class="info col-xl-6">
          <img src="../assets/images/anastas-mateev-Uxooollwo9k-unsplash.jpg" alt="cover" />
        </div>
        <div class="info col-xl-6">
          <h2 class="h1">Pourquoi nous choisir </h2>
<p>Envie de retrouver tout l’éclat et la brillance de votre voiture ? La station de lavage CarWash propose des interventions de qualité et adaptées aux particuliers comme aux professionnels. Vous avez un problème de taches rebelles, de mauvaise odeur, de poils d’animaux sur les textiles et moquettes de votre véhicule ? Le centre de CarWash répond à vos attentes, quelle que soit la marque de votre véhicule.</p>
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Why Choose Us -->

  <!-- Start Featured Work -->
  <div id="services" class="featured-work text-center">
    <div class="container">
      <h2>NOS SERVICES</h2>
      <p>Avoir un habitacle propre et sain est indispensable pour conduire et se déplacer en voiture dans d’agréables conditions. Or, dans cette section on va partager avec vous quelque images de nos services. </p>
      <ul class='list-unstyled row'>
        <li class="active col-md">Lavage Complet</li>
        <li class="col-md">Lavage extérieur</li>
        <li class="col-md">Lavage intérieur</li>
      </ul>
    </div>
    <div class="shuffle-imgs">
      <div class="row">
        
        <div class="col-md">
          <img class="logos" src="img/intérieur.jpg" alt="" />
        </div>

      </div>
    </div>
  </div>
  <!-- End Featured Work -->

  <!-- Start Pricing Table -->
  <div id="prix" class="pricing-table text-center">
    <div class="container">
      <h2>Equipes</h2>
      <p class="section-description">Le plaisir de confier sa voiture à une équipe de professionnels.

        Vous confiez votre véhicule à notre équipe et moins de 30 minutes après, nous vous le restituons, propre à l’intérieur comme à l’extérieur en fonction du programme que vous avez choisi.</p>
      <div class="row">
        <!-- Start Grid Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Lavage extérieur</h4>
              
              
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Ahmed Boughatas</li>
                <li class="list-group-item">Sami Mezyeni</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Grid Column -->
        <!-- Start Grid Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card corporate">
            <div class="card-body">
              <h4 class="card-title">Lavage Complet</h4>
              
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Ahmed Boughatas</li>
                <li class="list-group-item">Sami Mezyeni</li>
                <li class="list-group-item">Chaker Salem</li>
                <li class="list-group-item">Ali Aarbi</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Grid Column -->
        <!-- Start Grid Column -->
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Lavage intérieur</h4>
              
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Chaker Salem</li>
                <li class="list-group-item">Ali Aarbi</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Grid Column -->
      </div>
    </div>
  </div>
  <!-- End Pricing Table -->
 

  <!-- Start Contact Us -->
  <div id="contact" class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-center text-md-left">
          <p>Si tu as aimé notre travail , n'hésites pas à nous contacter.</p>
        </div>
        <div class="col-md-4 text-center text-md-right">
          <a href="../contact/">Contacter nous </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Us -->

</main>


<?php

include '../assets/layouts/footer.php'

?>