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
      <div class="presentation-title">Interfață</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Caracteristici</h1>

          <li class="info-content">Spre deosebire de o clasă, o interfață nu poate include niciun cod.</li>

          <li class="info-content">Conținutul metodelor nu poate fi definit de o interfață, ci doar numele și argumentele acestora.</li>

          <li class="info-content">Toate metodele specificate de o interfață trebuie să fie implementate de toate clasele care o implementează.</li>

          <li class="info-content">Mai multe interfețe pot fi implementate de o clasă.</li>

          <li class="info-content">Cuvântul cheie "interface" este utilizat pentru a declara o interfață.</li>

          <li class="info-content">Metodele neabstracte nu pot fi menținute de interfețe.</li>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">interface NumeInterfata {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;public function metoda1();</span>

            <span class="php-syntax-code">&nbsp;&nbsp;public function metoda2($nume, $culoare);</span>

            <span class="php-syntax-code">&nbsp;&nbsp;public function metoda3() ;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h1>Diferența dintre clasa abstractă și interfețe.</h1>

          <p class="info-content">Clasa abstractă:</p>

          <li class="info-content">Clasa abstractă se încadrează în abstractizarea parțială.</li>

          <li class="info-content">Clasele abstracte sunt capabile să suporte atât metode abstracte, cât și metode neabstracte.</li>

          <li class="info-content">În clasele abstracte pot fi create variabile.</li>

          <li class="info-content">În clasele abstracte se poate utiliza orice specificator de acces.</li>

          <li class="info-content">Cuvântul cheie "extends" ne permite să accesăm aspecte ale claselor abstracte din clasele derivate.</li>

          <li class="info-content">Moștenirea multiplă nu este posibilă.</li>

          <p class="info-content">Interfață:</p>

          <li class="info-content">Interfața este acoperită de o abstractizare completă.</li>

          <li class="info-content">Numai metodele abstracte pot fi menținute de interfețe.</li>

          <li class="info-content">Nu se pot crea variabile în interfețe.</li>

          <li class="info-content">În interfețe se pot utiliza numai specificatori de acces public.</li>

          <li class="info-content">Putem obține interfața dintr-o clasă derivată prin utilizarea cuvântului cheie "implement".</li>

          <li class="info-content">Moștenirea multiplă este permisă atunci când se utilizează interfețe.</li>

          <h1>Utilizarea interfețelor</h1>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">// Definirea interfetei</span>

            <span class="php-syntax-code">interface Animal {</span>

            <span class="php-syntax-code">&nbsp;public function sunetAnimal();</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class Caine implements Animal {</span>

            <span class="php-syntax-code">&nbsp;public function sunetAnimal() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Ham ham \n"; </span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">class Pisica implements Animal {</span>

            <span class="php-syntax-code">&nbsp;public function sunetAnimal() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Miau miau \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$obiect_1 = new Caine();</span>

            <span class="php-syntax-code">$obiect_1->sunetAnimal();</span>

            <span class="php-syntax-code">$obiect_2 = new Pisica();</span>

            <span class="php-syntax-code">$obiect_2->sunetAnimal();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Ham ham</span>

            <span class="php-syntax-code">Miau miau </span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
// Definirea interfetei
interface Animal {
  public function sunetAnimal();
}

class Caine implements Animal {
  public function sunetAnimal() {
    echo "Ham ham \n";
  }
}

class Pisica implements Animal {
  public function sunetAnimal() {
    echo "Miau miau \n";
  }
}

$obiect_1 = new Caine();
$obiect_1->sunetAnimal();

$obiect_2 = new Pisica();
$obiect_2->sunetAnimal();
?>
</div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>