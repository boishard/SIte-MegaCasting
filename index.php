<?php
  require 'inc/header.php';
  include 'inc/bdd.php';
  $user = new usersManager();
  $offreCasting = new offreCastingManager(); $offreCasting->remplissageDonnee();
  $fluxRss = new rss();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mega Production </title>
    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" media="screen">
  </head>
  <body>
    <div class="row">
      <div class="col-sm-12">
        <?php
          require 'inc/navbar.php';
        ?>
      </div>
    </div><!-- ./ Row -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Image slide -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/slide_1.png" alt="slide_1">
        </div>
      <!-- Controle Slider-->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
    <img src="img/bot_carousel.png" alt="" class="bot-carousel"/>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>MEGACASTING, C'EST QUOI ?</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-1">
            <i class="fa fa-code fa-3x"></i>
          </div>
          <div class="col-xs-12 col-sm-5">
            <p>
              Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur
            </p>
          </div>
          <div class="col-xs-12 col-sm-1">
            <i class="fa fa-archive fa-3x"></i>
          </div>
          <div class="col-xs-12 col-sm-5">
            <p>
              Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur
            </p>
          </div>
        </div><!-- ./ Row -->
        <br><br>
        <div class="row">
          <div class="col-xs-12 col-sm-1  ">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-xs-12 col-sm-5">
            <p>
              Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur
            </p>
          </div>
          <div class="col-xs-12 col-sm-1">
            <i class="fa fa-globe fa-3x"></i>
          </div>
          <div class="col-xs-12 col-sm-5">
            <p>
              Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur
            </p>
          </div>
        </div><!-- ./ Row -->
      </div><!-- ./ Container -->
      <br><br>
    </section>
    <section class="last-offre">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>LES DERNIERES OFFRES</h1>
          </div>
        </div><!-- ./ Row -->
        <div class="row">
          <?php $offreCasting->listerOffreCastingHome(); ?>
        </div><!-- ./ Row -->
        <br><br>
      </div><!-- ./ Conainer -->
    </section>
    <!-- Bibliothéque Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Boostrap js -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/npm.js"></script>

  </body>
</html>

<?php 
  require 'inc/footer.php';
?>