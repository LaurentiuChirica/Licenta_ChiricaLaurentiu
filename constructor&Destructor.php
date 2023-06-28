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
      <div class="presentation-title">Constructor / Destructor</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Constructor</h1>

          <p class="info-content">PHP 5 permite să declari metode de constructor pentru clase.</p>

          <p class="info-content">Constructorul obiectului este adecvat pentru orice inițializare necesară înainte de utilizare. Utilizând "__construct" sau numele clasei în sine, putem crea un constructor.</p>

          <p class="info-content">În cazul în care clasa copil definește un constructor, constructorii părinți nu sunt invocați implicit. Pentru a activa un constructor părinte, este necesar un apel la parent::__construct().</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class ExempluConstructor_1 {</span>

            <span class="php-syntax-code">&nbsp;public function exemplu() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Primul constructor \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class ExempluConstructor_2 extends ExempluConstructor_1 {</span>

            <span class="php-syntax-code">&nbsp;public function __construct() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo parent::exemplu();</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Al doilea constructor \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$obiect = new ExempluConstructor_2();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Primul constructor</span>

            <span class="php-syntax-code">Al doilea constructor</span>
          </div>

          <h1>Destructor</h1>

          <p class="info-content">Noțiunea de destructor din PHP 5 este comparabilă cu cea din alte limbaje orientate pe obiecte, cum ar fi C++.</p>

          <p class="info-content">Odată ce un obiect nu mai are referințe la el sau când este distrus în mod intenționat în orice ordine în timpul închiderii, se va executa metoda destructor.</p>

          <p class="info-content">Utilizând metoda "__destruct", putem proiecta destructori.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class ExempluDestructor_1 {</span>

            <span class="php-syntax-code">&nbsp;public function exemplu() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Primul constructor \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">class ExempluDestructor_2 extends ExempluDestructor_1 {</span>

            <span class="php-syntax-code">&nbsp;public function __construct() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo parent::exemplu();</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Al doilea constructor \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;public function __destruct() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Destructor! \n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$obiect = new ExempluDestructor_2();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Primul constructor</span>

            <span class="php-syntax-code">Al doilea constructor</span>

            <span class="php-syntax-code">Destructor!</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
// Constructor
class ExempluConstructor_1 {
  public function exemplu() {
    echo "Primul constructor \n";
  }
}

class ExempluConstructor_2 extends ExempluConstructor_1 {
 public function __construct() {
   echo parent::exemplu();
   echo "Al doilea constructor \n";
 }
}
$obiect_Constructor = new ExempluConstructor_2();

echo "\n\n";

// Destructor
class ExempluDestructor_1 {
  public function exemplu() {
    echo "Primul constructor \n";
  }
}

class ExempluDestructor_2 extends ExempluDestructor_1 {
  public function __construct() {
    echo parent::exemplu();
    echo "Al doilea constructor \n";
  }
  public function __destruct() {
    echo "Destructor!";
  }
}
$obiect_Destructor = new ExempluDestructor_2();
?>
</div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>