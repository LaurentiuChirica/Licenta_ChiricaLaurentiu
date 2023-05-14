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
            <div class="presentation-title">Sintaxa PHP</div>

            <div class="next-previous-buttons-container">
              <?php include ("next_previous_buttons.php"); ?>
            </div>

            <div class="info-container">
                <div class="content-box">
                    <div class="info-content-container">
                        <p class="info-content">
                          Un fișier PHP include, de obicei, etichete HTML și o parte din codul de scripting PHP. Un exemplu PHP simplu poate fi realizat foarte rapid. Creați un fișier cu extensia <code class="code-elements">.php</code> și adăugați-i etichete HTML și cod PHP pentru a realiza acest lucru.
                        </p>

                        <div class="static-code-example">
                          <div>
                            <span class="php-syntax-example"><</span>
                            <span class="php-syntax-example">?php</span>
                          </div>


                            <br>

                            <span class="php-syntax-code">// Codul se scrie aici</span>

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

                      <div class="code-example">
                          <h1>Exemplu de cod in PHP</h1>
                          <?php include('live_compiler.php'); ?>
                      </div>
                    </div>

                    <div class="info-content-container">
                      <h2>Sensibilitatea la majuscule și minuscule în PHP</h2>
                      
                      <p class="info-content">Clasele, funcțiile definite de utilizator și cuvintele cheie (cum ar fi  <code class="code-elements">echo</code>,  <code class="code-elements">if</code>,  <code class="code-elements">else</code> și  <code class="code-elements">while</code>) nu fac distincție între majuscule și minuscule în PHP. Cu toate acestea, majusculele contează atunci când vine vorba de numele variabilelor.</p>

                      <p class="info-content">Puteți vedea că toate cele trei declarații echo sunt egale și corecte în exemplul de mai jos:</p>

                      
                      <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php"><span><</span>?php
  echo "Hello world using echo </br>"; <br> 
  ECHO "Hello world using ECHO </br>";  <br>
  EcHo "Hello world using EcHo </br>";  <br>
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
