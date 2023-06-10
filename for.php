<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI - Aplicatii Internet</title>
    <link href="reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include ("header.php"); ?>
<body>
    <div class="main-content">
      <div class="side-navbar-container">
			  <?php include('sidenavbar.php'); ?>
      </div>

      <div class="main-content-container">
            <div class="presentation-title">For</div>

            <div class="next-previous-buttons-container">
              <?php include ("next_previous_buttons.php"); ?>
            </div>

            <div class="info-container">
                <div class="info-content-container">
                  <p class="info-content">În cazul în care numărul de iterații este cunoscut, acesta trebuie utilizat; în caz contrar, trebuie utilizată o buclă while. Acest lucru indică faptul că bucla for este utilizată atunci când numărul de ori în care doriți să executați un bloc de cod este deja cunoscut.</p>

                  <p class="info-content">Utilizatorii pot consolida toate instrucțiunile legate de bucle într-o singură locație cu ajutorul acestei funcții. A se vedea următoarea sintaxă:</p>

                  <h2>Sintaxa:</h2>

                  <div class="static-code-example">
                    <span class="php-syntax-example">&lt;?php</span>

                    <span class="php-syntax-code">for(inițializare; condiție; incrementare/decrementare){ </span>

                    <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat</span>


                    <span class="php-syntax-code">}</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2>Parametrii</h2>

                  <p class="info-content">Bucla for din PHP este comparabilă cu buclele for din Java, C și C++. Următoarele definiții se aplică parametrilor buclei for:</p>

                  <li class="info-content">inițializare - Setează valoarea contorului buclei la zero. Bucla for efectuează doar o singură dată valoarea inițială. Acest element nu este necesar.</li>

                  <li class="info-content">evaluează - valoarea fiecărei iterații este condiția. Până când condiția este falsă, bucla continuă să ruleze. Dacă este TRUE, execuția buclei continuă; dacă este FALSE, se termină.</li>

                  <li class="info-content">Creștere/diminuare - Crește sau scade valoarea variabilei.</li>

                  <h2>Exemplu:</h2>

                  <div class="static-code-example">
                    <span class="php-syntax-example">&lt;?php</span>
                    
                    <span class="php-syntax-code">for ($x = 0; $x <= 10; $x++) {</span>

                    <span class="php-syntax-code">&nbsp;echo "Numarul este: $x \n";</span>

                    <span class="php-syntax-code">}</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2>Rezultat:</h2>

                  <div class="static-code-example">                    
                    <span class="php-syntax-code">Numarul este: 0</span>
                    
                    <span class="php-syntax-code">Numarul este: 1</span>
                    
                    <span class="php-syntax-code">Numarul este: 2</span>
                    
                    <span class="php-syntax-code">Numarul este: 3</span>
                    
                    <span class="php-syntax-code">Numarul este: 4</span>
                    
                    <span class="php-syntax-code">Numarul este: 5</span>
                    
                    <span class="php-syntax-code">Numarul este: 6</span>
                    
                    <span class="php-syntax-code">Numarul este: 7</span>
                    
                    <span class="php-syntax-code">Numarul este: 8</span>
                    
                    <span class="php-syntax-code">Numarul este: 9</span>
                    
                    <span class="php-syntax-code">Numarul este: 10</span>
                  </div>
              </div>
            </div>
            <div class="info-container">

            <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  for ($x = 0; $x <= 10; $x++) {
    echo "Numarul este: $x \n";
  }
?>
</div>
              <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
            </div>
        </div>
    </div>
</body>

<?php	include ("footer.php"); ?>
</html>
