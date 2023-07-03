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
      <div class="presentation-title">Specificatori de acces</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce sunt specificatorii de acces?</h1>

          <p class="info-content">Modificatorii de acces pentru proprietăți și metode pot limita locurile din care acestea pot fi accesate.</p>

          <p class="info-content">În PHP, există trei tipuri diferite de specificatori de acces.</p>

          <li class="info-content">Public - membrii clasei cu acest modificator de acces vor fi accesibili public de oriunde, chiar și din afara domeniului de aplicare al clasei.</li>

          <li class="info-content">Privat - membrii clasei cu acest cuvânt cheie vor fi accesați în interiorul clasei însăși. Acesta protejează membrii de accesul din afara clasei cu ajutorul referinței instanței clasei.</li>

          <li class="info-content">Protected - același lucru ca și private, cu excepția faptului că permite subclaselor să acceseze membrii protejați ai superclasei.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Angajat {</span>

            <span class="php-syntax-code">&nbsp;public $nume = "John";</span>

            <span class="php-syntax-code">&nbsp;protected $departament = "IT";</span>

            <span class="php-syntax-code">&nbsp;private $salariu = 10000;</span>

            <span class="php-syntax-code">&nbsp;public function afisare() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Bine ai venit ".$this->nume. "\n";</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Departament: ".$this->departament. "\n";</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Salariu: ".$this->salariu. "\n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class Angajator extends Angajat {</span>

            <span class="php-syntax-code">&nbsp;public function afisare_1() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Bine ai venit ".$this->nume. "\n";</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Departament: ".$this->departament. "\n";</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Salariu: ".$this->salariu. "\n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$obiect = new Angajator();</span>

            <span class="php-syntax-code">$obiect->afisare_1();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Bine ai venit John</span>

            <span class="php-syntax-code">Departament: IT</span>

            <span class="php-syntax-code">Salariu: PHP Warning:  Undefined property: Angajator::$salariu</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
class Angajat {
  public $nume = "John";
  protected $departament = "IT";
  private $salariu = 10000;

  public function afisare() {
    echo "Bine ai venit ".$this->nume. "\n";
    echo "Departament: ".$this->departament. "\n";
    echo "Salariu: ".$this->salariu. "\n";
  }
}

class Angajator extends Angajat {
  public function afisare_1() {
    echo "Bine ai venit ".$this->nume. "\n";
    echo "Departament: ".$this->departament. "\n";
    echo "Salariu: ".$this->salariu. "\n";
  }
}

$obiect = new Angajator();
$obiect->afisare_1();
?>
</div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>