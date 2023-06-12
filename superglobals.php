<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AI - Aplicatii Internet</title>
  <link href="reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include("header.php"); ?>

<body>
  <div class="main-content">
    <div class="side-navbar-container">
      <?php include('sidenavbar.php'); ?>
    </div>

    <div class="main-content-container">
      <div class="presentation-title">Superglobals</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este un superglobal?</h1>
        
          <p class="info-content">Superglobalele sunt variabile încorporate care sunt întotdeauna accesibile în toate sferele și au fost introduse pentru prima dată în PHP 4.1.0.</p>

          <p class="info-content">Superglobalele sunt întotdeauna accesibile, indiferent de domeniul de aplicare, și că le puteți accesa din orice funcție, clasă sau fișier fără a face nimic special.</p>

          <p class="info-content">Variabilele superglobale din PHP includ:</p>

          <li class="info-content">$GLOBALS</li>

          <li class="info-content">$_SERVER</li>

          <li class="info-content">$_REQUEST</li>

          <li class="info-content">$_POST</li>

          <li class="info-content">$_GET</li>

          <li class="info-content">$_FILES</li>

          <li class="info-content">$_ENV</li>

          <li class="info-content">$_COOKIE</li>

          <li class="info-content">$_SESSION</li>


          <p class="info-content">Următoarele capitole vor explica o parte din superglobali, iar restul vor fi explicate în capitolele următoare.</p>

        </div>
      </div>
    </div>

  </div>
</body>

<?php include("footer.php"); ?>

</html>