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
      <div class="presentation-title">Functii pentru String - Sir de caractere</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>
      <div class="info-container">
        <div class="info-content-container">
          <h1>Diverse functii pentru string-uri</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">PHP oferă o serie de funcții pentru string-uri care pot fi utilizate pentru a accesa și modifica un sir de caractere. Mai jos sunt enumerate principalele funcții de stringuri:</p>
          
          <h1>Funcția strlen()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Lungimea unui șir de caractere este returnată de funcția PHP <code class="code-elements">strlen()</code>.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo strlen("Salutare!");</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">9</span>
          </div>

          <h1>Funcția str_word_count()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Metoda PHP <code class="code-elements">str_word_count()</code> returneaza numărul de cuvinte dintr-un șir de caractere.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo str_word_count("Salutare Lume!");</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">2</span>
          </div>

          <h1>Funcția strrev()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <li class="info-content">Metoda PHP <code class="code-elements">strrev()</code> inversează un șir de caractere.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo strrev("Salutare lume!");</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">!emul eratulaS</span>
          </div>

          <h1>Funcția strpos()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Metoda PHP <code class="code-elements">strpos()</code> strpos() caută un anumit text într-un șir de caractere. În cazul în care se găsește o potrivire, funcția returnează poziția caracterului primei potriviri. În cazul în care nu se găsește nicio potrivire, funcția va returna FALSE.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo strpos("Salutare lume!", "lume");</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">9</span>
          </div>

          <h1>Funcția str_replace()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Metoda PHP <code class="code-elements">str_replace()</code> înlocuiește unele caractere dintr-un șir de caractere cu alte caractere.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo str_replace("lume", "studenti", "Salutare lume!");</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare studenti!</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <div class="horizontal-line-container">
          <div class="horizontal-line"></div>
        </div>
        
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
echo strlen("Salutare!");

echo "\n\n";

echo str_word_count("Salutare lume!");

echo "\n\n";

echo strrev("Salutare lume!");

echo "\n\n";

echo strpos("Salutare lume!", "lume");

echo "\n\n";

echo str_replace("lume", "studenti", "Salutare lume!");
?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>

</html>