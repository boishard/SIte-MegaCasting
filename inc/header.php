<?php
session_start();
?>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h1>MegaCasting</h1>
      </div>
      <div class="col-sm-offset-4 col-sm-5 text-right">
        <a href="login.php" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-log-in"></span> Connexion</a>
        <a href="register.php" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-user"></span> Inscription</a>
      </div>
    </div><!-- ./ Row -->
  </div><!-- ./ Container -->
</header>

<div class="container">
  <?php if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message): ?>
      <div class="alert alert-<?=$type;?>">
        <?= $message ?>
      </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
  <?php endif; ?>
</div>