<!DOCTYPE html>
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
      <div class="presentation-title">$GLOBALS</div>

      <div class="next-previous-buttons-container">
          <?php include('../next_previous_buttons.php');?>
      </div>
      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Super-variabila globală PHP $GLOBALS este utilizată pentru a accesa variabilele globale în orice moment într-un script PHP (precum și din cadrul funcțiilor sau metodelor).</p>

          <p class="info-content">PHP stochează toate variabilele globale într-o matrice numită $GLOBALS[index]. Numele variabilelor sunt conținute în index.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$a = 10;</span>

            <span class="php-syntax-code">$b = 20;</span>

            <span class="php-syntax-code">function adunare() {</span>

            <span class="php-syntax-code">&nbsp;$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">adunare();</span>

            <span class="php-syntax-code">echo $c;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">30</span>
          </div>
        </div>

        <hr>

        <div class="info-content-container">

          <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
$a = 10;
$b = 20;
function adunare() {
 $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
adunare();
echo $c;
?>
</div>
          <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
        </div>
      </div>
    </div>

  </div>
</body>

<?php
include('../footer.php');
?>

</html>