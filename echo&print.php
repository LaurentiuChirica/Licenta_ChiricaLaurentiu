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
            <div class="presentation-title">Echo / Print</div>

            <div class="next-previous-buttons-container">
              <?php include ("next_previous_buttons.php"); ?>
            </div>

            <div class="info-container">
              <div class="content-box">
                <div class="info-content-container">
                  <p class="info-content">Instrucțiunea <b>echo</b> este utilizată frecvent pentru a afișa rezultatul. În PHP, există în principiu două moduri de a obține rezultatul:</p>

                  <li class="info-content">echo</li>

                  <li class="info-content">print</li>

                  <p class="info-content">Structurile de limbaj precum echo și print nu operează niciodată ca niște funcții. Prin urmare, parantezele nu sunt necesare. Cu toate acestea, puteți folosi sau nu paranteze cu oricare dintre propoziții. Aceste propoziții pot fi utilizate pentru a scoate variabile sau șiruri de caractere.</p>
                </div>

                <div class="info-content-container">
                  <li class="info-content">Distincția dintre print și echo:</li>

                  <p class="info-content"> Ambele sunt utilizate pentru a afișa date pe un ecran. Diferențele sunt mici: <code class="code-elements">echo</code> nu are o valoare de returnare, în timp ce <code class="code-elements">print</code> are o valoare de returnare de 1, astfel încât poate fi utilizat în expresii. <code class="code-elements">echo</code> poate primi mai mulți parametri (deși o astfel de utilizare este rară), în timp ce <code class="code-elements">print</code> poate primi un singur argument. <code class="code-elements">echo</code> este marginal mai rapid decât <code class="code-elements">print</code>.</p>

                  <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php"><span><</span>?php
$fname = "Jane";  
$lname = "Doe";  
echo "Numele meu complet este: " . $fname . " " . $lname . "\n";

/* Acest print poate afisa doar o singura variabila, incercati sa afisati precum la echo si veti primi eroare */
print "Numele meu este: " . $fname . "\n";

$lang = "PHP";
$ret = print $lang." este un limbaj de programare. \n";  
/* Puteti vedea demonstrat valoarea de returnare a functiei print */
print "Valoarea returnata de instructiunea sprint: ".$ret; 
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
