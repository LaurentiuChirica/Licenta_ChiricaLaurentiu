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
      <div class="presentation-title">Clase Abstracte</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o clasa abstractă?</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <p class="info-content">O clasă abstractă este o combinație între o interfață și o clasă. Aceasta poate defini atât funcționalitatea, cât și interfața.</p>

          <p class="info-content">Toate metodele abstracte specificate într-o clasă abstractă trebuie să fie implementate de clasele care o extind.</p>

          <p class="info-content">Cuvântul cheie "abstract" se adaugă la declararea unei clase abstracte în același mod ca și în cazul claselor.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">abstract class ClasaParinte {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;abstract public function metoda1();</span>

            <span class="php-syntax-code">&nbsp;&nbsp;abstract public function metoda2($nume, $culoare);</span>

            <span class="php-syntax-code">&nbsp;&nbsp;abstract public function metoda3() ;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content">Următoarele reguli se aplică atunci când o clasă copil moștenește dintr-o clasă abstractă:</p>

          <li class="info-content">Metoda clasei copil trebuie să redeclare metoda abstractă părinte și să aibă același nume ca și clasa.</li>

          <li class="info-content">Modificatorul de acces pentru metoda clasei copil trebuie să fie același sau mai puțin restrictiv.</li>

          <li class="info-content">Numărul necesar de argumente trebuie să rămână constant. Cu toate acestea, clasa copil poate avea în plus parametri opționali.</li>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">abstract class Masina {</span>

            <span class="php-syntax-code">&nbsp;public $brand;</span>

            <span class="php-syntax-code">&nbsp;public function __construct($brand) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->brand = $brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp;abstract public function afisare(); </span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class Mercedes extends Masina {</span>

            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; return "Masina germana! Brandul este: $this->brand \n"; </span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">class Renault extends Masina {</span>

            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; return "Masina franceza! Brandul este: $this->brand \n"; </span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">class Nissan extends Masina {</span>

            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; return "Masina japoneza! Brandul este: $this->brand \n"; </span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$obiect_1 = new Mercedes("Mercedes-Benz");</span>

            <span class="php-syntax-code">echo $obiect_1->afisare();</span>

            <span class="php-syntax-code">$obiect_2 = new Renault("Renault");</span>

            <span class="php-syntax-code">echo $obiect_2->afisare();</span>

            <span class="php-syntax-code">$obiect_3 = new Nissan("Nissan");</span>

            <span class="php-syntax-code">echo $obiect_3->afisare();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Masina germana! Brandul este: Mercedes-Benz</span>

            <span class="php-syntax-code">Masina franceza! Brandul este: Renault</span>

            <span class="php-syntax-code">Masina japoneza! Brandul este: Nissan</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
abstract class Masina {
  public $brand;

  public function __construct($brand) {
    $this->brand = $brand;
  }

  abstract public function afisare() ;
}

class Mercedes extends Masina {
  public function afisare() {
    return "Masina germana! Brandul este: $this->brand \n";
  }
}

class Renault extends Masina {
  public function afisare() {
    return "Masina franceza! Brandul este: $this->brand \n";
  }
}

class Nissan extends Masina {
  public function afisare() {
    return "Masina japoneza! Brandul este: $this->brand \n";
  }
}

$obiect_1 = new Mercedes("Mercedes-Benz");
echo $obiect_1->afisare();

$obiect_2 = new Renault("Renault");
echo $obiect_2->afisare();

$obiect_3 = new Nissan("Nissan");
echo $obiect_3->afisare();
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