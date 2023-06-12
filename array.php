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
      <div class="presentation-title">Array</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este un array?</h1>

          <p class="info-content">Un array este o hartă ordonată care stochează valori în funcție de chei. Mai multe valori de același tip pot fi stocate într-o singură variabilă folosind această tehnică.</p>

          <p class="info-content">Funcțiile condiționale, funcțiile cu funcție în funcție și funcțiile recursive sunt toate definite în PHP.</p>

          <h1>Avantaje</h1>
          
          <li class="info-content">Mai puțin cod: Nu este nevoie să definim mai multe variabile.</li>
          
          <li class="info-content">Ușor de parcurs: Cu ajutorul unei singure bucle, putem parcurge toate elementele unui array.</li>
          
          <li class="info-content">Sortare: Putem sorta elementele unui array.</li>

          <h2>Crearea unui array</h2>

          <p class="info-content">Funcția  <code class="code-elements">array()</code> din PHP este utilizată pentru a construi un array.</p>

          <div class="static-code-example">
            <span class="php-syntax-example">array();</span>
          </div>

          <h1>Tipuri de array-uri</h1>

          <p class="info-content">Există 3 tipuri de matrice în PHP:</p>

          <li class="info-content">Array indexat</li>

          <li class="info-content">Array asociativ</li>
          
          <li class="info-content">Array multidimensional</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$culori = array("rosu", "verde", "albastru", "galben");</span>

            <span class="php-syntax-code">echo count($culori); // returneaza lungimea(numar elementelor) din array</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">4</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $culori = array("rosu", "verde", "albastru", "galben");
  echo count($culori); // returneaza lungimea(numar elementelor) din array
?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>