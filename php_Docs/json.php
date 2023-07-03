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
      <div class="presentation-title">JSON</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este JSON?</h1>
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Datele pot fi stocate și transferate folosind formatul JSON, care înseamnă JavaScript Object Notation.</p>

          <p class="info-content">Deoarece formatul JSON este bazat pe text, acesta poate fi utilizat ca format de date de orice limbaj de calculator și este simplu de trimis și primit de la un server.</p>

          <p class="info-content">Cu ajutorul funcțiilor json_encode() și json_decode, PHP ne permite să codificăm și să decodificăm JSON.</p>

          <h1>Funcția json_encode</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Reprezentarea JSON a unei valori este returnată de metoda json_encode(). Altfel spus, aceasta transformă variabilele PHP care conțin matrici în JSON.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">string json_encode ( mixed $value [, int $options = 0 [, int $depth = 512 ]] )</span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php></span>

            <span class="php-syntax-code">$arrayExemplu_1 = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);</span>

            <span class="php-syntax-code">echo json_encode($arrayExemplu_1);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$arrayExemplu_2 = array('prenume' => 'John', 'nume' => 'Doe', 'email' => 'exemplu@gmail.com');</span>

            <span class="php-syntax-code">echo json_encode($arrayExemplu_2);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">{"a":1,"b":2,"c":3,"d":4,"e":5}</span>

            <span class="php-syntax-code">{"prenume":"John","nume":"Doe","email":"exemplu@gmail.com"}</span>
          </div>

          <br>

          <h1>Funcția json_decode</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Șirul JSON este decodificat cu ajutorul metodei json_decode(). Sau, altfel spus, transformă un șir JSON într-o variabilă PHP.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">mixed json_decode ( string $json [, bool $assoc = false [, int $depth = 512 [, int $options = 0 ]]] )</span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php></span>

            <span class="php-syntax-code">$json_1 = '{"a":1,"b":2,"c":3,"d":4,"e":5}';</span>

            <span class="php-syntax-code">var_dump(json_decode($json_1, true)); // true înseamnă că obiectul returnat va fi convertit în matrice asociativă</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$json_2 = '{"prenume" : "John", "nume" : "Doe", "email" : "exemplu@gmail.com"}';</span>

            <span class="php-syntax-code">var_dump(json_decode($json_2, true));</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">array(5) {</span>

            <span class="php-syntax-code">["a"] => int(1)</span>

            <span class="php-syntax-code">["b"] => int(2)</span>

            <span class="php-syntax-code">["c"] => int(3)</span>

            <span class="php-syntax-code">["d"] => int(4)</span>

            <span class="php-syntax-code">["e"] => int(5)</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">array(3) { </span>

            <span class="php-syntax-code">["prenume"]=> string(4) "John"</span>

            <span class="php-syntax-code">["nume"]=> string(3) "Doe"</span>

            <span class="php-syntax-code">["email"]=> string(15) "rahul@gmail.com"</span>

            <span class="php-syntax-code">}</span>
          </div>

          <br>

          <h1>Accesarea valorilor decodificate</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php></span>

            <span class="php-syntax-code">$obiectJson = '{"John":35,"Michael":37,"Trevor":43}';</span>

            <span class="php-syntax-code">$obiect = json_decode($obiectJson);</span>

            <span class="php-syntax-code">echo $obiect->John;</span>

            <span class="php-syntax-code">echo $obiect->Michael;</span>

            <span class="php-syntax-code">echo $obiect->Trevor;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">35</span>

            <span class="php-syntax-code">37</span>

            <span class="php-syntax-code">43</span>
          </div>
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
        </div>
      </div>
      <div class="info-container">
        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
$arrayExemplu_1 = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($arrayExemplu_1);

echo "\n\n";

$arrayExemplu_2 = array('prenume' => 'John', 'nume' => 'Doe', 'email' => 'exemplu@gmail.com');
echo json_encode($arrayExemplu_2);

echo "\n\n";

$json_1 = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json_1, true)); // true înseamnă că obiectul returnat va fi convertit în matrice asociativă

echo "\n\n";

$json_2 = '{"prenume" : "John", "nume" : "Doe", "email" : "exemplu@gmail.com"}';

var_dump(json_decode($json_2, true));

echo "\n";

$obiectJson = '{"John":35,"Michael":37,"Trevor":43}';
$obiect = json_decode($obiectJson);

echo "\n";

echo $obiect->John;

echo "\n";

echo $obiect->Michael;

echo "\n";

echo $obiect->Trevor;

echo "\n\n";
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