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
                    
                    <p class="info-content">O <b>variabila</b> este un container ce contine informatie</p>  
                    
                    <p class="info-content">Orice tip de valoare, cum ar fi un text, un număr, o matrice sau un obiect, poate fi stocat într-o variabilă. O variabilă are atașată un nume și o valoare. Sintaxa utilizată pentru a defini o variabilă este următoarea:</p>

                    <div class="static-code-example">
                      <span class="php-syntax-example">$numele_variabilei = valoare;</span>
                    </div>

                    <p class="info-content">Reguli pentru declararea variabilelor în PHP:</p>

                    <li class="info-content">O variabilă trebuie să înceapă cu un semn de dolar ($) și apoi să fie urmată de numele său.</li>

                    <li class="info-content">O variabilă trebuie să înceapă cu un semn de dolar ($) și apoi să fie urmată de numele său.</li>

                    <li class="info-content">Primul caracter din numele unei variabile trebuie să fie o literă sau simbolul de subliniere (_).</li>

                    <li class="info-content">Spațiile nu sunt permise în numele variabilelor PHP.</li>

                    <li class="info-content">Rețineți că numele variabilei nu poate începe cu un număr sau cu un alt simbol special.</li>

                    <li class="info-content">Din cauza sensibilității la majuscule și minuscule a variabilelor PHP, $nume și $NUME sunt ambele procesate diferit.</li>
                    
                    <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php"><span><</span>?php
  $txt = "variabila mea!";
  echo "Asta este $txt";
?>
</div>
                      <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
                    </div>
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
