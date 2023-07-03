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
      <div class="presentation-title">If else PHP</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Cu ajutorul instrucțiunilor condiționale pot fi efectuate diferite acțiuni în funcție de diferite situații.</p>

          <p class="info-content">În PHP avem următoarele instrucțiuni condiționale:</p>

          <li class="info-content">if</li>

          <li class="info-content">if else</li>

          <li class="info-content">if-else-if</li>
  
          <h1>If</h1>

          <p class="info-content">Instrucțiunea if din PHP permite executarea condiționată a codului. În cazul în care condiția este adevărată, acesta este executat.</p>

          <p class="info-content">Instrucțiunile if sunt utilizate pentru a executa blocul de cod conținut în ele doar atunci când condiția dată este adevărată.</p>

          <h2>Structura:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">if(conditie) { </span>

            <span class="php-syntax-code">&nbsp;&nbsp;//cod de executat</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$numar = 31;</span>

            <span class="php-syntax-code">if($numar < 50) { </span>

                <span class="php-syntax-code">&nbsp;&nbsp;echo "$numar este mai mic de 50";</span>

                <span class="php-syntax-code">}</span>

                <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">12 este mai mic de 50</span>
          </div>

          <h1>If else</h1>

          <p class="info-content">Instrucțiunea if...else execută un set de cod dacă o condiție este adevărată și un alt set de cod dacă este falsă.</p>

          <h2>Structura:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">if(conditie) { </span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat în cazul în care condiția este adevărată;</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat în cazul în care condiția este falsă;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$numar = 31;</span>

            <span class="php-syntax-code">if($numar % 2 == 0) { </span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "$numar este par";</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "$numar este impar";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">31 este impar</span>
          </div>

          <h1>If-else-if</h1>

          <p class="info-content">Mai multe instrucțiuni if?.else pot fi combinate folosind instrucțiunea specială if-else-if din PHP. Prin urmare, putem folosi această declarație pentru a verifica mai multe condiții.</p>

          <h2>Structura:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">if(conditie) { </span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat în cazul în care condiția este adevărată;</span>

            <span class="php-syntax-code">} else if(conditie) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat dacă prima condiție este falsă și această condiție este adevărată;</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat dacă toate condițiile sunt false;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$timp = date("H"); // luam ora actuala</span>

            <span class="php-syntax-code">if($timp < "10" ) { </span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Sa aveti o dimineata buna!";</span>

            <span class="php-syntax-code">} else if($timp < "20" ) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Sa aveti o zi buna!";</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Sa aveti o seara buna!";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>
        </div>
        <div class="info-content-container">

          <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $exempluNumar = 31;
  if($exempluNumar < 50) { 
    echo "$exempluNumar este mai mic de 50 \n"; 
  }
  
  $numar=31; 
  if($numar % 2==0) { 
    echo "$numar este par \n"; 
  } else { 
    echo "$numar este impar \n";
  } 
  
  $timp=date("H"); // luam ora actuala 
  if($timp < "10" ) { 
    echo "Sa aveti o dimineata buna!\n";
   } else if($timp < "20" ) { 
    echo "Sa aveti o zi buna!\n"; 
  } else { 
    echo "Sa aveti o seara buna!\n" ; 
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