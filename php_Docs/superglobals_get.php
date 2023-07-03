s<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AI - Aplicatii Internet</title>
  <link href="../reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include('../header.php');?>

<body>
  <div class="main-content">
    <div class="side-navbar-container">
      <?php include('../sidenavbar.php');?>
    </div>

    <div class="main-content-container">
      <div class="presentation-title">$_GET</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">PHP $_GET este o variabilă super-globală care este utilizată pentru a stoca datele unui formular odată ce un formular HTML cu metoda="get" a fost trimis.</p>
          
          <p class="info-content">Datele trimise prin URL pot fi, de asemenea, colectate de $_GET.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">&lt;a href="testare_get.php?subject=PHP&web=ac.tuiasi.com">Test $GET</a></span>

            <span class="php-syntax-code">echo "Aplicati la " . $_GET['subject'] . " at " . $_GET['web'];</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content">Atunci când un utilizator face clic pe link-ul "Test $GET", parametrii "subject" și "web" sunt trimiși la "test_get.php", iar apoi puteți accesa valorile lor în "test_get.php" cu $_GET.</p>

          <p class="info-content"><b>Indicație:</b> Veți afla mai multe despre $_GET în capitolul Formulare PHP.</p>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>

</html>