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
      <div class="presentation-title">Concepte OOP</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este OOP?</h1>

          <p class="info-content">Programarea orientată pe obiecte este cunoscută sub numele de OOP.</p>

          <p class="info-content">În timp ce programarea orientată pe obiecte presupune construirea de obiecte care includ atât date, cât și funcții, programarea procedurală presupune dezvoltarea de proceduri sau funcții care efectuează acțiuni asupra datelor.</p>

          <p class="info-content">Programarea orientată pe obiecte oferă următoarele avantaje:</p>

          <li class="info-content">OOP este mai rapid și mai simplu de utilizat.</li>
          
          <li class="info-content">OOP oferă programelor o structură clară.</li>
          
          <li class="info-content">OOP face posibilă proiectarea de aplicații complet reutilizabile cu mai puțin cod și cu un timp de dezvoltare mai rapid, încurajând programatorii PHP să nu se repete (DRY - Don't Repeat Yourself) în codul lor.</li>

          <p class="info-content"><b>Recomandare:</b> Abordarea DRY (Don't Repeat Yourself) urmărește să reducă repetarea codului. În loc să repetați aceleași coduri la nesfârșit, ar trebui să le extrageți pe cele care sunt comune programului, să le puneți într-o singură locație și să le folosiți.</p>

          <h1>Clasa</h1>

          <p class="info-content">O clasă este un tip de entitate care stabilește comportamentul și proprietățile unui obiect. În alți termeni, este un plan sau un set de instrucțiuni pentru crearea unui anumit tip de obiect.</p>

          <p class="info-content">Declarați o clasă în PHP prin începerea declarației cu cuvântul cheie class, apoi adăugând numele clasei și o pereche de paranteze ({}).</p>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class ClasaMea {</span>

            <span class="php-syntax-code">&nbsp;//proprietatile clasei si metodele vin aici</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <img src="/images/php-oops-concept.png" style="width: 60%; height: 80%;">

          <p class="info-content">Acesta este planul lucrării de construcție care este clasa, iar casele și apartamentele realizate după acest plan sunt obiectele.</p>

          <h1>Obiect</h1>

          <p class="info-content">O instanță particulară a structurii de date este definită de o clasă. Creăm numeroase obiecte care sunt membri ai unei clase după ce aceasta a fost definită. O instanță este un alt termen pentru un obiect.</p>

          <p class="info-content">Un obiect este ceva care poate efectua un set de activități conexe.</p>

          <h2>Exemplu:</h2>
          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Demonstratie {</span>

            <span class="php-syntax-code">&nbsp;private $variabila ="Salutare!";</span>

            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo $this->variabila;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$obiect = new Demonstratie();</span>

            <span class="php-syntax-code">$obiect->afisare();</span>

            <span class="php-syntax-example">?></span>
          </div>

        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  class Demonstratie {
    private $variabila ="Salutare!";
    public function afisare() {
      echo $this->variabila;
    }
  }
  $obiect = new Demonstratie();
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