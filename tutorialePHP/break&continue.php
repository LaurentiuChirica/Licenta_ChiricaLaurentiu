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
      <div class="presentation-title">Break & Continue</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Break</h1>

          <p class="info-content">Buclele for, while, do-while, switch și for-each utilizate în prezent sunt oprite de instrucțiunea PHP break. Dacă utilizați break în interiorul unei bucle interioare, este întreruptă doar execuția buclei interioare.</p>

          <p class="info-content">Executarea buclei sau a structurii switch este imediat oprită cu ajutorul cuvântului cheie break. În situația declarată, acesta întrerupe fluxul curent al programului, iar atunci când sunt executate următoarele instrucțiuni din afara buclei, controlul programului este restabilit.</p>

          <p class="info-content">Toate structurile de buclă, inclusiv while, do-while, for și foreach, precum și cazurile de comutație, sunt compatibile cu instrucțiunea break.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">for ($i = 0; $i < 10; $i++) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo $i . "\n";</span>

            <span class="php-syntax-code">&nbsp;&nbsp; if($i === 4) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;break;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">0</span>
            
            <span class="php-syntax-code">1</span>
            
            <span class="php-syntax-code">2</span>
            
            <span class="php-syntax-code">3</span>
            
            <span class="php-syntax-code">4</span>
          </div>
              
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>


          <h1>Continue</h1>
  
          <p class="info-content">Bucla este continuată cu ajutorul comenzii continue din PHP. Aceasta continuă cu fluxul curent al programului și sare peste codul rămas la condiția necesară.</p>
  
          <p class="info-content">Atunci când treceți instantaneu la următoarea iterație într-o buclă sau într-o structură de control de comutare, se utilizează instrucțiunea continue.</p>
  
          <p class="info-content">Puteți utiliza instrucțiunea continue cu orice tip de buclă, inclusiv foreach, while, do-while și for loop. Instrucțiunea continue permite utilizatorului să renunțe la executarea codului în circumstanțele date.</p>
  
          <h2>Exemplu:</h2>
  
          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>
  
            <span class="php-syntax-code">for ($i = 0; $i < 10; $i++) {</span>
  
            <span class="php-syntax-code">&nbsp;&nbsp; if($i === 4) {</span>
  
            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;continue;</span>
  
            <span class="php-syntax-code">&nbsp;&nbsp;}</span>
  
            <span class="php-syntax-code">&nbsp;&nbsp; echo $i . "\n";</span>
  
            <span class="php-syntax-code">}</span>
  
            <span class="php-syntax-example">?></span>
          </div>
  
          <h2>Rezultat:</h2>
  
          <div class="static-code-example">
            <span class="php-syntax-code">0</span>
  
            <span class="php-syntax-code">1</span>
  
            <span class="php-syntax-code">2</span>
  
            <span class="php-syntax-code">3</span>
  
            <span class="php-syntax-code">5</span>
  
            <span class="php-syntax-code">6</span>
            
            <span class="php-syntax-code">7</span>
            
            <span class="php-syntax-code">8</span>
            
            <span class="php-syntax-code">9</span>
          </div>
        </div>

      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  for ($i = 0; $i < 10; $i++) {
    echo $i . "\n";
    if($i === 4) {
      break;
    }
  }

  echo "\n";

  for ($i = 0; $i < 10; $i++) {
    if($i === 4) {
      continue;
    }
    echo $i . "\n";
  }
?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>