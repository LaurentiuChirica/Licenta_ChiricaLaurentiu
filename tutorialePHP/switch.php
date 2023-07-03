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
      <div class="presentation-title">Switch</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Instrucțiunea switch este utilizată pentru a efectua mai multe operații în funcție de anumite circumstanțe.</p>

          <p class="info-content">Pentru a evita scrierea unor blocuri lungi de cod if..elseif..else, utilizați instrucțiunea switch.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">switch(expresie) { </span>

            <span class="php-syntax-code">&nbsp;case Caz1:</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat dacă expresie = Caz1;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;break;</span>

            <span class="php-syntax-code">&nbsp;case Caz2:</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat dacă expresie = Caz2;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;break;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;...</span>

            <span class="php-syntax-code">&nbsp;default:</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat în cazul în care expresie este diferit de toate cazurile;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content">Detalii importante privind switch:</p>

          <li class="info-content">O declaratie care este opțională este <code class="code-elements">default</code>. Această declarație <code class="code-elements">default</code> trebuie să fie întotdeauna ultima, chiar dacă nu este importantă.</li>

          <li class="info-content">Într-o instrucțiune switch, este permisă o singură valoare <code class="code-elements">default</code>. Mai multe valori implicite ar putea duce la o eroare fatală.</li>

          <li class="info-content">În fiecare scenariu se poate utiliza o instrucțiune <code class="code-elements">break</code>, care este folosită pentru a încheia seria de instrucțiuni.</li>

          <li class="info-content">Utilizarea instrucțiunii <code class="code-elements">break</code> într-un switch este opțională. În cazul în care nu se utilizează <code class="code-elements">break</code>, toate declarațiile vor fi executate după ce se găsesc valori de caz corespunzătoare.</li>

          <li class="info-content">Expresia switch din PHP acceptă utilizarea funcțiilor, precum și a tipurilor numerice, de caractere și de șiruri de caractere.</li>

          <li class="info-content">Instrucțiunile switch pot fi imbricate, deși acest lucru face ca programul să fie mai greu de citit și mai complicat.</li>

          <li class="info-content">În loc de două puncte (:), puteți utiliza un punct și virgulă ();. Acesta nu va cauza erori.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$numar = 30;</span>

            <span class="php-syntax-code">switch($numar) {</span>

            <span class="php-syntax-code">&nbsp;case 10:</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Numarul este egal cu 10";</span>

            <span class="php-syntax-code">&nbsp;&nbsp;break;</span>

            <span class="php-syntax-code">&nbsp;case 20:</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Numarul este egal cu 20";</span>

            <span class="php-syntax-code">&nbsp;&nbsp;break;</span>

            <span class="php-syntax-code">&nbsp;case 30:</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Numarul este egal cu 30";</span>

            <span class="php-syntax-code">&nbsp;&nbsp;break;</span>

            <span class="php-syntax-code">&nbsp;case 40:</span>

            <span class="php-syntax-code">&nbsp;echo "Numarul este egal cu 40";</span>

            <span class="php-syntax-code">&nbsp;&nbsp;break;</span>

            <span class="php-syntax-code">&nbsp;default:</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Numarul nu este egal cu: 10, 20, 30, sau 40";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Numarul este egal cu 30</span>
          </div>
        </div>
        <div class="info-content-container">

          <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>
          <span class="php-syntax-example">&lt;?php</span>

          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $numar = 30;
  switch($numar) {
  case 10:
    echo "Numarul este egal cu 10";
    break;
  case 20:
    echo "Numarul este egal cu 20";
    break;
  case 30:
    echo "Numarul este egal cu 30";
    break;
  case 40:
    echo "Numarul este egal cu 40";
    break;
  default:
    echo "Numarul nu este egal cu: 10, 20, 30, sau 40";
  }
?>
          </div>
          <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>