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
      <div class="presentation-title">Constante de clasă</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce sunt constantele de clasă?</h1>

          <p class="info-content">Odată declarate, constantele nu pot fi modificate. Dacă aveți nevoie să definiți anumite date constante în cadrul unei clase, constantele de clasă pot fi utile.</p>

          <p class="info-content">Cuvântul cheie const este utilizat pentru a declara o constantă de clasă în interiorul unei clase. Constantele de clasă sunt sensibile la majuscule și minuscule.</p>

          <p class="info-content">Prin utilizarea numelui clasei, a operatorului de rezoluție a domeniului de aplicare (::) și a numelui constantei, putem accesa o constantă din afara clasei.</p>

          <p class="info-content">Prin utilizarea cuvântului cheie self, a operatorului de rezoluție a domeniului de aplicare (::) și a numelui constantei, putem accesa o constantă din interiorul unei clase.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Mesaj {</span>

            <span class="php-syntax-code">&nbsp;const Mesaj_Constant = "Salutare!";</span>
            
            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo self::Mesaj_Constant;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">echo Mesaj::Mesaj_Constant;</span>

            <span class="php-syntax-code">$obiect = new Mesaj();</span>

            <span class="php-syntax-code">$obiect->afisare();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare!</span>

            <span class="php-syntax-code">Salutare!</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
class Mesaj {
  const Mesaj_Constant = "Salutare!";

  public function afisare() {
    echo self::Mesaj_Constant;
  }
}

echo Mesaj::Mesaj_Constant;

echo "\n";

$obiect = new Mesaj();
$obiect->afisare();
?>
</div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>