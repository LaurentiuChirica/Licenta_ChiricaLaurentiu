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
      <div class="presentation-title">Traits</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o trăsătură?</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">O clasă copil poate moșteni doar de la un singur părinte în PHP, care permite doar moștenirea unică.</p>
          
          <p class="info-content">Ce se întâmplă dacă o clasă trebuie să moștenească mai mult de un comportament? Această problemă este rezolvată de caracteristicile OOP.</p>
          
          <p class="info-content">Metodele care pot fi utilizate în diferite clase sunt declarate folosind trăsături. Metodele și metodele abstracte care sunt aplicabile la numeroase clase pot fi incluse în trăsături. Aceste metode pot avea, de asemenea, orice modificator de acces (public, private sau protected).</p>
          
          <p class="info-content">Cu ajutorul cuvântului cheie <code class="code-elements">trait</code>, se declară traits.</p>
          

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">trait NumeleTrasaturii {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// cod</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">// Pentru a folosi un trait folosim cuvantul cheie use</span>
            
            <span class="php-syntax-code">class NumeClasa {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;use NumeleTrasaturii;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content"><b>Nota:</b> Pentru a utiliza o trăsătură într-o clasă, utilizați cuvântul cheie <code class="code-elements">use</code></p>

          <h1>Utilizarea trăsăturilor</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">trait Mesaj1 {</span>

            <span class="php-syntax-code">&nbsp;public function mesaj_1() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Salutare! Aici este primul trait \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">trait Mesaj2 {</span>

            <span class="php-syntax-code">&nbsp;public function mesaj_2() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Salutare! Aici este cel de al doilea trait \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">class Exemplu_1 {</span>

            <span class="php-syntax-code">&nbsp;use Mesaj1;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">class Exemplu_2 {</span>

            <span class="php-syntax-code">&nbsp;use Mesaj1, Mesaj2;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$obiect_1 = new Exemplu_1();</span>

            <span class="php-syntax-code">$obiect_1->mesaj_1();</span>

            <span class="php-syntax-code">$obiect_2 = new Exemplu_2();</span>

            <span class="php-syntax-code">$obiect_2->mesaj_1();</span>

            <span class="php-syntax-code">$obiect_2->mesaj_2();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare! Aici este primul trait</span>

            <span class="php-syntax-code">Salutare! Aici este primul trait</span>

            <span class="php-syntax-code">Salutare! Aici este cel de al doilea trait</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <div class="horizontal-line-container">
          <div class="horizontal-line"></div>
        </div>

        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
trait Mesaj1 {
  public function mesaj_1() {
    echo "Salutare! Aici este primul trait \n";
  }
}

trait Mesaj2 {
  public function mesaj_2() {
    echo "Salutare! Aici este cel de al doilea trait \n";
  }
}

class Exemplu_1 {
 use Mesaj1;
}

class Exemplu_2 {
 use Mesaj1, Mesaj2;
}

$obiect_1 = new Exemplu_1();
$obiect_1->mesaj_1();

$obiect_2 = new Exemplu_2();
$obiect_2->mesaj_1();
$obiect_2->mesaj_2();
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