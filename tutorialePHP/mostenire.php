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
      <div class="presentation-title">Mostenire</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este mostenirea?</h1>

          <p class="info-content">Se referă la ideea de a utiliza caracteristici dintr-o clasă în altă clasă. Putem accesa atributele ambelor clase dacă moștenim caracteristicile acestora într-o altă clasă. Prin utilizarea cuvântului cheie <b>"extends"</b>, putem mări setul de caracteristici ale unei clase.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Masina {</span>

            <span class="php-syntax-code">&nbsp;public $brand;</span>

            <span class="php-syntax-code">&nbsp;public $culoare;</span>

            <span class="php-syntax-code">&nbsp;public function __construct($brand, $culoare) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->brand = $brand;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->culoare = $culoare;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Masina este " . $this->brand . " si are culoarea " . $this->culoare ."\n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class Autoturism extends Masina {</span>

            <span class="php-syntax-code">&nbsp;public function mesaj() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Autoturismul detine acte doveditoare. \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$obiect = new Autoturism("Mercedes-Benz", "Negru");</span>

            <span class="php-syntax-code">$obiect->mesaj();</span>

            <span class="php-syntax-code">$obiect->afisare();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Autoturismul detine acte doveditoare.</span>

            <span class="php-syntax-code">Masina este Mercedes-Benz si are culoarea Negru</span>
          </div>

          <h1>Suprascrierea metodelor moștenite</h1>

          <p class="info-content">Prin rescrierea metodelor din clasa copil sub același nume cu cele moștenite, metodele moștenite pot fi înlocuite.</p>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Masina {</span>

            <span class="php-syntax-code">&nbsp;public $brand;</span>

            <span class="php-syntax-code">&nbsp;public $culoare;</span>

            <span class="php-syntax-code">&nbsp;public function __construct($brand, $culoare) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->brand = $brand;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->culoare = $culoare;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Masina este " . $this->brand . " si are culoarea " . $this->culoare ."\n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class Autoturism extends Masina {</span>

            <span class="php-syntax-code">&nbsp;public $categorie;</span>

            <span class="php-syntax-code">&nbsp;public function __construct($brand, $culoare, $categorie) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->brand = $brand;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->culoare = $culoare;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->categorie = $categorie;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp;public function mesaj() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Autoturismul detine acte doveditoare. \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Masina este " . $this->brand . " si are culoarea " . $this->culoare ." facand parte din categoria " . $this->categorie . "\n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$obiect = new Autoturism("Mercedes-Benz", "negru", "autoturism");</span>

            <span class="php-syntax-code">$obiect->mesaj();</span>

            <span class="php-syntax-code">$obiect->afisare();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Autoturismul detine acte doveditoare.</span>

            <span class="php-syntax-code">Masina este Mercedes-Benz si are culoarea negru facand parte din categoria autoturism</span>
          </div>

          <h1>Cuvântul cheie final</h1>

          <p class="info-content">Pentru a preveni suprascrierea metodelor sau moștenirea claselor, utilizați cuvântul cheie final.</p>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">final class Masina {</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class Autoturism extends Masina {</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">PHP Fatal error: Class Autoturism may not inherit from final class (Masina)</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
class Masina {
  public $brand;
  public $culoare;

  public function __construct($brand, $culoare) {
    $this->brand = $brand;
    $this->culoare = $culoare;
  }

  public function afisare() {
    echo "Masina este " . $this->brand . " si are culoarea " . $this->culoare ."\n";
  }
}
class Autoturism extends Masina {
  public $categorie;
  public function __construct($brand, $culoare, $categorie) {
    $this->brand = $brand;
    $this->culoare = $culoare;
    $this->categorie = $categorie;
  }

  public function mesaj() {
    echo "Autoturismul detine acte doveditoare. \n";
  }

  public function afisare() {
    echo "Masina este " . $this->brand . " si are culoarea " . $this->culoare ." facand parte din categoria " . $this->categorie . "\n";
  }
}

$obiect = new Autoturism("Mercedes-Benz", "negru", "autoturism");
$obiect->mesaj();
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