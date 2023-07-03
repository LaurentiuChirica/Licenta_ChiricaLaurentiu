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
      <div class="presentation-title">Proprietăți Statice</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o proprietate statică?</h1>

          <p class="info-content">Proprietățile statice pot fi apelate direct fără a crea o instanță a unei clase</p>

          <p class="info-content">Cuvântul cheie static este utilizat pentru a declara proprietățile statice.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class NumeClasa {</span>

            <span class="php-syntax-code">&nbsp;public static $proprietateStatica = "Salutare!";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">NumeClasa::$proprietateStatica;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content"><b>Nota:</b> Utilizați cuvântul cheie <code class="code-elements">parent</code> în interiorul clasei copil pentru a invoca o proprietate statică</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Exemplu1 {</span>

            <span class="php-syntax-code">&nbsp;public static $valoare = 100;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class Exemplu2 extends Exemplu1 {</span>

            <span class="php-syntax-code">&nbsp;public function obtineValoare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;return parent::$valoare;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// Putem apela valoarea proprietatii statice direct din clasa parinte</span>

            <span class="php-syntax-code">echo Exemplu1::$valoare;</span>

            <span class="php-syntax-code">// Sau putem apela valoarea proprietatii statice din metoda obtineValoare()</span>

            <span class="php-syntax-code">$obiect = new Exemplu2();</span>

            <span class="php-syntax-code">echo $obiect->obtineValoare();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">100</span>

            <span class="php-syntax-code">100</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
class Exemplu1 {
  public static $valoare = 100;
}

class Exemplu2 extends Exemplu1 {
  public function obtineValoare() {
    return parent::$valoare;
  }
}

// Putem apela valoarea proprietatii statice direct din clasa parinte
echo Exemplu1::$valoare;

echo "\n\n";

// Sau putem apela valoarea proprietatii statice din metoda obtineValoare()
$obiect = new Exemplu2();
echo $obiect->obtineValoare();
?>
</div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>