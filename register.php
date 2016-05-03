<?php require 'inc/functions.php';
if(!empty($_POST))
{
  $errors = array();

  if(empty($_POST['inputMail']))
  {
    $errors['inputMail'] = 'Votre mail n\'est pas valide';
  } else {
    $req = $pdo -> prepare('SELECT id FROM user WHERE inputMail =  ?');
    $req -> execute([$_POST['inputMail']]);
    $user = $req -> fetch();
    if($user)
    {
      $errors['inputMail'] = 'Cet email est déja utilisé';
    }
  }


  if(empty($_POST['inputPassword']))
  {
    $errors['inputPassword'] = 'Votre mot de passe n\'est pas valide';
  } else {
    
  }

  if(!empty($errors))
  {
    $req = $pdo -> prepare("INSERT INTO User SET inputMail = ?, inputPassword = ?");
    $req->execute($_POST['inputPassword'], $_POST['inputMail']);
    die('Notre compte a bien été créer');
  }
  debug($errors);
}
?>

<?php 
if(!empty($errors)): ?>
<div class="alert alert-danger">
  <p>Vous n'avez pas rempli correctement le formulaire</p>
  <ul>
    <?php foreach ($errors as $error): ?>
      <li><?= $error; ?></li>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>

<?php
require 'inc/header.php';
require 'inc/db.php';
$bdd = connectBdd();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
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
          <form action="" method="post">
            <h1>Inscription</h1>
            <div class="form-group">
              <input type="email" class="form-control" name='inputMail' placeholder="Entrez votre Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="inputPassword" placeholder="Entrez votre Mot de passe">
            </div>
            <button type ="sumit" class="btn btn-primary">S'INSCRIRE </button>
          </form>
        </div>
      </div>
    </section>
    <img src="img/bot_carousel.png" alt="" class="bot-carousel"/>
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