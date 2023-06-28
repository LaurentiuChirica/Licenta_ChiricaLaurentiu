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
      <div class="presentation-title">Clase/Obiecte</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">O clasă este un șablon pentru obiecte, iar un obiect este o instanță a clasei.</p>

          <p class="info-content">Să considerăm că avem o clasă numită Masini. O masina poate avea atribute cum ar fi brand, culoare, greutatea etc. Valorile acestor proprietăți pot fi stocate în variabile precum $brand, $culoare și $categorie pe care le putem defini.</p>

          <p class="info-content">Acțiunile și proprietățile clasei sunt toate trimise către obiectele individuale (suzuki, mercedes etc.) atunci când acestea sunt create, dar fiecare obiect va avea un set unic de valori pentru proprietăți.</p>

          <h1>Definirea unei Clase</h1>

          <p class="info-content">Cuvântul cheie class este utilizat pentru a defini o clasă, care este urmată de numele clasei și de două paranteze {}. Între paranteze se află toate atributele și operațiile sale:</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Masini {</span>

            <span class="php-syntax-code">&nbsp;// Proprietati ale clasei</span>

            <span class="php-syntax-code">&nbsp;public $brand;</span>

            <span class="php-syntax-code">&nbsp;public $culoare;</span>

            <span class="php-syntax-code">&nbsp;public $categorie;</span>

            <span class="php-syntax-code">&nbsp;// Metode</span>

            <span class="php-syntax-code">&nbsp; function setare_brand($brand) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; $this->brand = $brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp; function obtine_brand() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; return $this->brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content"><b>Nota:</b> O variabila locala are prioritate mai mare decat o variabila globala.</p>

          <h1>Definirea obiectelor</h1>

          <p class="info-content">Fără obiecte, clasele sunt inutile. O clasă poate fi utilizată pentru a crea mai multe obiecte. Toate atributele și metodele definite de clasă sunt prezente în fiecare obiect, dar valorile lor vor varia.</p>

          <p class="info-content">Cuvântul cheie new este utilizat pentru a crea obiecte care aparțin unei clase.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Masini {</span>

            <span class="php-syntax-code">&nbsp;// Proprietati ale clasei</span>

            <span class="php-syntax-code">&nbsp;public $brand;</span>

            <span class="php-syntax-code">&nbsp;public $culoare;</span>

            <span class="php-syntax-code">&nbsp;public $categorie;</span>

            <span class="php-syntax-code">&nbsp;// Metode</span>

            <span class="php-syntax-code">&nbsp; function setare_brand($brand) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; $this->brand = $brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp; function obtine_brand() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; return $this->brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$mercedes = new Masini();</span>

            <span class="php-syntax-code">$audi = new Masini();</span>

            <span class="php-syntax-code">$mercedes->setare_brand('Mercedes-Benz');</span>

            <span class="php-syntax-code">$audi->setare_brand('Audi');</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">echo $mercedes->obtine_brand();</span>

            <span class="php-syntax-code">echo $audi->obtine_brand();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Mercedes-Benz</span>

            <span class="php-syntax-code">Audi</span>
          </div>

          <h1>Cuvântul cheie $this</h1>

          <p class="info-content">Cuvântul cheie $this, care apare numai în interiorul metodelor, se referă la obiectul curent.</p>


          <h1>Instanceof</h1>

          <p class="info-content">Cuvântul cheie instanceof poate fi utilizat pentru a determina dacă un element aparține unei anumite clase:</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$mercedes = new Masini();</span>

            <span class="php-syntax-code">var_dump($mercedes instanceof Masini);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">bool(true)</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  class Masini {

  // Proprietati ale clasei
  public $brand;
  public $culoare;
  public $categorie;

  // Metode
    function setare_brand($brand) {
      $this->brand = $brand;
    }
    function obtine_brand() {
      return $this->brand;
    }
  }

  $mercedes = new Masini();
  $audi = new Masini();
  $mercedes->setare_brand('Mercedes-Benz');
  $audi->setare_brand('Audi');
  echo $mercedes->obtine_brand();
  echo "\n";
  echo $audi->obtine_brand();
  
  echo "\n";
  var_dump($mercedes instanceof Masini);
?>
</div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>