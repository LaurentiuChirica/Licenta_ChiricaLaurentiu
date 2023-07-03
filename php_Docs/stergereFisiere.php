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
      <div class="presentation-title">Ștergere Fișiere</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Functia unlink</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <p class="info-content">Orice fișier poate fi șters în PHP prin utilizarea metodei unlink(). Numai numele fișierului este acceptat ca argument de către funcția unlink(). Aceasta este comparabilă cu funcția C unlink() din UNIX.</p>

          <p class="info-content">În cazul în care fișierul nu este distrus, funcția PHP unlink() aruncă o eroare de nivel E_WARNING. Dacă fișierul este șters în mod corespunzător, se returnează TRUE; în caz contrar, FALSE.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">bool unlink ( string $filename [, resource $context ] )</span>
          </div>

          <br>
          
          <li class="info-content">$filename reprezintă numele fișierului care urmează să fie șters.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$status=unlink('data.txt');</span>

            <span class="php-syntax-code">if($status){</span>

            <span class="php-syntax-code">&nbsp;echo "Fișier șters cu succes";</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;echo "Scuze!";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

<?php
include('../footer.php');
?>

</html>