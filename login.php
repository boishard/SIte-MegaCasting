<?php require 'inc/functions.php'; ?>
<?php require 'inc/header.php';?>
<?php debug($_SESSION); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BOISHARD LA GROSSE MERDE</title>
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
    <section class="form-login">
      <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
          <form action="index.html" method="post">
            <h1>Connexion</h1>
            <div class="form-group">
              <input type="email" class="form-control" name='inputMail' placeholder="Entrez votre Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="inputPassword" placeholder="Entrez votre Mot de passe">
            </div>
            <a href="#" class="btn btn-block btn-primary btn-success">CONNEXION <span class="glyphicon glyphicon-log-in"></span></a>
            <a href="register.php" class="btn btn-block btn-primary btn-danger">S'INSCRIRE <span class="glyphicon glyphicon-user"></span></a>
          </form>
        </div>
      </div>

    </section>
    <img src="img/bot_carousel.png" alt="" class="bot-carousel"/>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <h2>Dernière Offres</h2>
            <ul>
              <li><a href="#">Offre 1</a></li>
              <li><a href="#">Offre 2</a></li>
              <li><a href="#">Offre 3</a></li>
              <li><a href="#">Offre 4</a></li>
              <li><a href="#">Offre 5</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h2>Domaine Métier</h2>
            <ul>
              <li><a href="#">Domaine 1</a></li>
              <li><a href="#">Domaine 2</a></li>
              <li><a href="#">Domaine 3</a></li>
              <li><a href="#">Domaine 4</a></li>
              <li><a href="#">Domaine 5</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h2>Dernier Utilisateur</h2>
            <ul>
              <li><a href="#">Utilisateur 1</a></li>
              <li><a href="#">Utilisateur 2</a></li>
              <li><a href="#">Utilisateur 3</a></li>
              <li><a href="#">Utilisateur 4</a></li>
              <li><a href="#">Utilisateur 5</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <ul class="sociaux">
              <li><a href="#"><img src="img/facebook.png" alt="" /></a></li>
              <li><a href="#"><img src="img/twitter.png" alt="" /></a></li>
              <li><a href="#"><img src="img/yt.png" alt="" /></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

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