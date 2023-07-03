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
      <div class="presentation-title">While</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">

          <p class="info-content">Atunci când o condiție este adevărată, instrucțiunea while va rula un bloc de cod. Într-o instrucțiune while, se utilizează următoarea sintaxă:</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">while(conditia este TRUE) { </span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Sintaxa alternativa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">while(conditia este TRUE): </span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat</span>

            <span class="php-syntax-code">endwhile</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$numar = 1;</span>

            <span class="php-syntax-code">while($numar <= 10) {</span>

            <span class="php-syntax-code">&nbsp;echo "$numar \n";</span>

            <span class="php-syntax-code">&nbsp;$numar++;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">1</span>
            
            <span class="php-syntax-code">2</span>
            
            <span class="php-syntax-code">3</span>
            
            <span class="php-syntax-code">4</span>
            
            <span class="php-syntax-code">5</span>
            
            <span class="php-syntax-code">6</span>
            
            <span class="php-syntax-code">7</span>
            
            <span class="php-syntax-code">8</span>
            
            <span class="php-syntax-code">9</span>
            
            <span class="php-syntax-code">10</span>
          </div>

          <h2>Exemplu explicat:</h2>

          <li class="info-content">$numar = 1; - Inițializațirea contorului buclei ($numar) și setați valoarea de pornire la 1</li>

          <li class="info-content">$numar <= 10 - Continuă bucla atâta timp cât $numar este mai mic sau egal cu 10</li>

          <li class="info-content">$numar++; - Crește valoarea contorului buclei cu 1 pentru fiecare iterație</li>

        </div>
        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
      </div>
      <div class="info-content-container">
        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $numar = 1;
  while($numar <= 10) { 
    echo "$numar \n"; 
    $numar++; 
  } 
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