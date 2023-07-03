<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AI - Aplicatii Internet</title>
  <link href="../reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include('../header.php');?>

<body>
  <div class="main-content">
    <div class="side-navbar-container">
            <?php include('../sidenavbar.php');?>
    </div>

    <div class="main-content-container">
      <div class="presentation-title">Comentarii PHP</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Un <b>comentariu</b> este o secțiune a unui program care este eliminată înainte de a afișa rezultatul programului și este destinată doar cititorilor umani. În PHP, există două formate de comentarii: </p>

          <li class="info-content">Comentarii pe o singură linie</li>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">// Acesta este un comentariu pe o singură linie</span>

            <span class="php-syntax-code"># Acesta este, de asemenea, un comentariu pe o singură linie</span>

            <span class="php-syntax-example">?></span>
          </div>
    
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
        
          <li class="info-content">Comentarii pe mai multe linii</li>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">/*</span>

            <span class="php-syntax-code">Acesta este un comentariu pe mai multe linii</span>

            <span class="php-syntax-code">pentru a exemplifica</span>

            <span class="php-syntax-code">cum functioneaza</span>

            <span class="php-syntax-code">*/</span>

            <span class="php-syntax-example">?></span>
          </div>
        </div>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <div class="info-content-container">
          <p class="info-content">Iată un exemplu de fișier PHP de bază cu un script PHP care afișează textul "Primul meu script in PHP!" pe o pagină web utilizând funcția PHP încorporată <code class="code-elements">"echo"</code>:</p>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo "Primul meu script in PHP!"; </span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content">Notă: Instrucțiunile PHP se termină cu punct și virgulă (;).</p>
        </div>

        <hr>

        <div class="info-content-container">
          <h2>Putem exclude porțiuni din cod prin utilizarea comentariilor:</h2>

          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
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
</body>

<?php
include('../footer.php');
?>

</html>