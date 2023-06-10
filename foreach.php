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
      <div class="presentation-title">Foreach</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Pentru a parcurge un vector, utilizați comanda foreach. Pointerul vectorului este deplasat cu o poziție la fiecare trecere, iar valoarea elementului curent al vectorului este atribuită la $value. Următoarea trecere va procesa următorul element.</p>

          <p class="info-content">Bucla foreach utilizează elemente, spre deosebire de indici, pentru a opera. Aceasta oferă cea mai simplă metodă de iterație prin elementele unui tablou.</p>

          <p class="info-content">Nu este nevoie să creștem valoarea în bucla foreach.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">foreach ($vector as $valoare) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Sintaxa alternativa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">foreach ($vector as $cheie => $element) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$culori = array("rosu", "verde", "albastru", "galben"); //declaram array-ul</span>

            <span class="php-syntax-code">foreach($culori as $valoare) {</span>

            <span class="php-syntax-code">&nbsp;echo "$valoare \n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">rosu</span>

            <span class="php-syntax-code">verde</span>

            <span class="php-syntax-code">albastru</span>

            <span class="php-syntax-code">galben</span>
          </div>

          <h2>Exemplu cu structura alternativa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$student = array(</span>

            <span class="php-syntax-code">&nbsp;"Name" => "John",</span>

            <span class="php-syntax-code">&nbsp;"Email" => "john.exemplu@gmail.com",</span>

            <span class="php-syntax-code">&nbsp;"Varsta" => "18",</span>

            <span class="php-syntax-code">&nbsp;"Sex" => "Barbat"</span>

            <span class="php-syntax-code">);</span>

            <span class="php-syntax-code">// afisam elementele cu ajutorul buclei foreach</span>

            <span class="php-syntax-code">foreach($student as $cheie => $element) {</span>

            <span class="php-syntax-code">&nbsp;echo $cheie . ":" . $element . "\n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Nume : John</span>

            <span class="php-syntax-code">Email : john.exemplu@gmail.com</span>

            <span class="php-syntax-code">Varsta : 18</span>

            <span class="php-syntax-code">Sex : Barbat</span>
          </div>
        </div>

        <hr>

        <div class="info-content-container">

          <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $culori = array("rosu", "verde", "albastru", "galben"); //declaram array-ul
  foreach($culori as $valoare) {
    echo "$valoare \n";
  }

  echo "\n";

  $student = array(
    "Name" => "John",
    "Email" => "john.exemplu@gmail.com",
    "Varsta" => "18",
    "Sex" => "Barbat"
  );

  // afisam elementele cu ajutorul buclei foreach
  foreach($student as $cheie => $element) {
    echo $cheie . ":" . $element . "\n";
  }
?>
          </div>
          <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
        </div>
      </div>
    </div>

  </div>
</body>

<?php include("footer.php"); ?>

</html>