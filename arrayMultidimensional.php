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
      <div class="presentation-title">Array Multidimensional</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este un array multidimensional?</h1>

          <p class="info-content">Un array care cuprinde unul sau mai multe alte array-uri se numește array multidimensional.</p>

          <p class="info-content">PHP acceptă array-uri multidimensionale cu două, trei, patru, cinci sau mai multe niveluri de adâncime. Cu toate acestea, cei mai mulți oameni se străduiesc să mențină array-uri cu o adâncime mai mare de trei niveluri.</p>

          <p class="info-content">Array-urile multidimensionale pot fi vizualizate ca matrici, care sunt reprezentate prin rânduri și coloane.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$arrayMultidimensional = array(</span>

            <span class="php-syntax-code">&nbsp;array(1, "John", 1000),</span>
            
            <span class="php-syntax-code">&nbsp;array(2, "Mike", 1200),</span>
            
            <span class="php-syntax-code">&nbsp;array(3, "Trevor", 1400)</span>

            <span class="php-syntax-example">);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplul de sus poate fi reprezentat in forma urmatorului tabel:</h2>

          <table>
            <tr>
              <th>Id</th>
              <th>Nume</th>
              <th>Salariu</th>
            </tr>
            <tr>
              <td>1</td>
              <td>John</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Mike</td>
              <td>1200</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Trevor</td>
              <td>1400</td>
            </tr>
          </table>          
          <h1>Bucla printr-un array asociativ</h1>

          <p class="info-content">Putem traversa cu ușurință array-ul folosind bucla foreach.</p>

          <h2>Exemplu:</h2>
          
          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$arrayMultidimensional = array(</span>

            <span class="php-syntax-code">&nbsp;array(1, "John", 1000),</span>

            <span class="php-syntax-code">&nbsp;array(2, "Mike", 1200),</span>

            <span class="php-syntax-code">&nbsp;array(3, "Trevor", 1400)</span>

            <span class="php-syntax-code">);</span>

            <span class="php-syntax-code">for ($linie = 0; $linie < 3; $linie++) {</span>

            <span class="php-syntax-code">&nbsp;for ($coloana = 0; $coloana < 3; $coloana++) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo $arrayMultidimensional[$linie][$coloana]."  ";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp;echo "\n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">1 John 1000</span>
            
            <span class="php-syntax-code">2 Mike 1200</span>
            
            <span class="php-syntax-code">3 Trevor 1400</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $arrayMultidimensional = array(
    array(1, "John", 1000),
    array(2, "Mike", 1200),
    array(3, "Trevor", 1400)
  );
  for ($linie = 0; $linie < 3; $linie++) {
    for ($coloana = 0; $coloana < 3; $coloana++) {
      echo $arrayMultidimensional[$linie][$coloana]." ";
    }
    echo "\n";
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