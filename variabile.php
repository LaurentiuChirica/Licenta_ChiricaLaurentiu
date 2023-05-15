<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI - Aplicatii Internet</title>
    <link href="reusable_tut_php.css" rel="stylesheet" />
</head>

<?php
	include ("header.php");
	
	echo "\n\t";
?>
<body>
    <div class="main-content">
      <div class="side-navbar-container">
			<?php include('sidenavbar.php'); ?>
        </div>

        <div class="main-content-container">
            <div class="presentation-title">Variabile PHP</div>

            <div class="next-previous-buttons-container">
              <?php  include ("next_previous_buttons.php"); ?>
            </div>

            <div class="info-container">

                <div class="content-box">
                    <div class="info-content-container">
                      <h2>Ce este o variabilă?</h2>  
                      
                      <p class="info-content">O variabila este un container ce contine informatie</p>  
                      
                      <p class="info-content">
                        Orice tip de valoare, cum ar fi un text, un număr, o matrice sau un obiect, poate fi stocat într-o variabilă.O variabilă are atașată un nume și o valoare. Sintaxa utilizată pentru a defini o variabilă este următoarea:
                      </p>

                      <div class="static-code-example">
                            <span class="php-syntax-example">$numele_variabilei = valoare;</span>
                      </div>

                        <p class="info-content">Un <b>comentariu</b> este o secțiune a unui program care este eliminată înainte de a afișa rezultatul programului și este destinată doar cititorilor umani. În PHP, există două formate de comentarii: </p>

                        <li class="info-content">Comentarii pe o singură linie</li>

                        <div class="static-code-example">
                          <div>
                            <span class="php-syntax-example"><</span>
                            <span class="php-syntax-example">?php</span>
                          </div>

                          <br>
                          
                          <span class="php-syntax-code">// Acesta este un comentariu pe o singură linie</span>

                          <br>

                          <span class="php-syntax-code"># Acesta este, de asemenea, un comentariu pe o singură linie</span>

                          <br>

                          <span class="php-syntax-example">?></span>
                        </div>

                        <li class="info-content">Comentarii pe mai multe linii</li>

                        <div class="static-code-example">
                          <div>
                            <span class="php-syntax-example"><</span>
                            <span class="php-syntax-example">?php</span>
                          </div>

                          <br>

                          <span class="php-syntax-code">/*</span>

                          <br>
                          
                          <span class="php-syntax-code">Acesta este un comentariu pe mai multe linii</span>
                          
                          <br>

                          <span class="php-syntax-code">pentru a exemplifica</span>

                          <br>

                          <span class="php-syntax-code">cum functioneaza</span>
                          
                          <br>

                          <span class="php-syntax-code">*/</span>

                          <br>

                          <span class="php-syntax-example">?></span>
                        </div>
                    </div>

                    <div class="info-content-container">
                      <p class="info-content">Iată un exemplu de fișier PHP de bază cu un script PHP care afișează textul "Primul meu script in PHP!" pe o pagină web utilizând funcția PHP încorporată  <code class="code-elements">"echo"</code>:</p>

                      <div class="static-code-example">
                          <div>
                            <span class="php-syntax-example"><</span>
                            <span class="php-syntax-example">?php</span>
                          </div>


                            <br>

                            <span class="php-syntax-code">echo "Primul meu script in PHP!"; </span>

                            <br>

                            <span class="php-syntax-example">?></span>
                        </div>

                      <p class="info-content">Notă: Instrucțiunile PHP se termină cu punct și virgulă (;).</p>
                    </div>

                    <div class="info-content-container">
                      <h2>Putem exclude porțiuni din cod prin utilizarea comentariilor:</h2>
                      
                      <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php"><span><</span>?php
  $x = 5;
  $y = 5;
  echo $x + /* + 15 */ + $y;
?>
</div>
                      <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<?php	

	include ("footer.php");
?>
</html>