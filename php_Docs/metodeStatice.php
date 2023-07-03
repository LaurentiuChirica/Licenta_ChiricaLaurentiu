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
      <div class="presentation-title">Metode Statice</div>

      <div class="next-previous-buttons-container">
      <?php include('../next_previous_buttons.php');?>      
    </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o metodă statică?</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Fără a construi mai întâi o instanță de clasă, metodele statice pot fi apelate imediat.</p>

          <p class="info-content">Termenul <code class="code-elements">static</code> este utilizat pentru a declara metodele statice.</p>

          <p class="info-content">Pentru a accesa o metodă statică, utilizați numele clasei, două puncte (::) și numele metodei</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class NumeClasa {</span>

            <span class="php-syntax-code">&nbsp;public static function metodaStatica() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">NumeClasa::metodaStatica();</span>

            <span class="php-syntax-example">?></span>
          </div>


          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Exemplu1 {</span>

            <span class="php-syntax-code">&nbsp;public static function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Salutare!";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class Exemplu2 {</span>

            <span class="php-syntax-code">&nbsp;public function mesaj() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo Exemplu1::afisare();</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$obiect = new Exemplu2();</span>

            <span class="php-syntax-code">echo $obiect->mesaj();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare!</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <div class="horizontal-line-container">
          <div class="horizontal-line"></div>
        </div>

        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
class Exemplu1 {
  public static function afisare() {
    echo "Salutare!";
  }
}

class Exemplu2 {
  public function mesaj() {
    echo Exemplu1::afisare();
  }
}

$obiect = new Exemplu2();
echo $obiect->mesaj();
?>
</div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>

</html>