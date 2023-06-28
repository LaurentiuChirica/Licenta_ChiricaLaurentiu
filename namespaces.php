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
      <div class="presentation-title">Namespaces</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este un namespace?</h1>

          <p class="info-content">Un namespace (spațiu de nume) este un calificativ care rezolvă următoarele probleme:</p>

          <li class="info-content">Acestea facilitează o mai bună organizare prin gruparea claselor care colaborează pentru a îndeplini o sarcină.</li>

          <li class="info-content">Acestea permit utilizarea aceluiași nume pentru mai multe clase.</li>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace Exemplu;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content"><b>Nota:</b> Prima linie a fișierului PHP trebuie să conțină o declarație de namespace.</p>

          <h2>Exemplu Invalid:</h2>
          
          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo "Salutare!";</span>

            <span class="php-syntax-code">namespace Exemplu;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content">Constantele, clasele și funcțiile declarate în acest fișier vor aparține spațiului de nume declarat.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace ExempluNamespace;</span>

            <span class="php-syntax-code">class Articol {</span>

            <span class="php-syntax-code">&nbsp;public $titlu = "";</span>

            <span class="php-syntax-code">&nbsp;public $pagini = 0;</span>

            <span class="php-syntax-code">&nbsp;public function mesaj() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Articolul " . $this->titlu . " are " . $this->pagini . " pagini.";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$articol = new Articol();</span>

            <span class="php-syntax-code">$articol->titlu = "exemplu";</span>

            <span class="php-syntax-code">$articol->pagini = 3;</span>

            <span class="php-syntax-example">?></span>

            <span class="php-syntax-example"></span>

            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$articol->mesaj();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Articolul exemplu are 3 pagini.</span>
          </div>

          <p class="info-content">Este posibil să existe spații de nume imbricate</p>
          
          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace Exemplu\Exemplu2;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h1>Aliasul spațiului de nume</h1>

          <p class="info-content">Un spațiu de nume sau o clasă poate beneficia de un alias pentru a facilita scrierea. </p>

          <p class="info-content">Acest lucru se realizează prin utilizarea cuvântului cheie <code class="code-elements">use</code>:</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace Exemplu\Exemplu2;</span>

            <span class="php-syntax-code">use Exemplu as ex;</span>

            <span class="php-syntax-example">?></span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
namespace ExempluNamespace;
class Articol {
  public $titlu = "";
  public $pagini = 0;
  public function mesaj() {
    echo "Articolul " . $this->titlu . " are " . $this->pagini . " pagini.";
  }
}

$articol = new Articol();
$articol->titlu = "exemplu";
$articol->pagini = 3;
?>

&lt;?php
  $articol->mesaj();
?>
</div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>