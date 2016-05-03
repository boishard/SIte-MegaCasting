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

<section class="last-offre">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>LES DERNIERES OFFRES</h1>
            </div>
        </div><!-- ./ Row -->
        <div class="row">
            <?php $offreCasting->listerOffreCastingAll(); ?>
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