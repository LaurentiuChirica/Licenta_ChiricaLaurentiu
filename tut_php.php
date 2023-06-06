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
            <div class="presentation-title">Prezentare Generala a PHP</div>

            <div class="next-previous-buttons-container" id="first-page">
              <?php include ("next_previous_buttons.php"); ?>
            </div>

            <div class="info-container">

                <div class="content-box">
                    <h1>Invata PHP</h1>
                    
                    <hr>
                    <div class="info-content-container">
                        <span class="info-content">PHP este un limbaj de programare server-side care poate fi utilizat pentru a crea site-uri web dinamice și interactive.</span>
    
                        <span class="info-content">PHP este un substitut popular și eficient din punct de vedere al costurilor pentru rivali precum ASP de la Microsoft.</span>
                    </div>

                    <h1>Ce este un fișier PHP?</h1>
                    
                    <hr>

                    <div class="info-content-container">
                        <p class="info-content">Codul PHP, HTML, CSS, JavaScript și textul sunt toate permise în fișierele PHP.</p>
    
                        <p class="info-content">Serverul execută codul PHP, iar produsul finit este trimis ca HTML simplu către browser.</p>

                        <p class="info-content">Fișierele PHP au extensia ".php"</p>
                    </div>

                    <hr>

                    <div class="info-content-container">
                        <h1>Aplicații ale PHP</h1>

                        <p class="info-content">PHP este unul dintre cele mai utilizate limbaje pe internet, câteva dintre aplicațiile acestuia:</p>

                        <li class="info-content">PHP îndeplinește funcții de sistem, adică de la fișierele de pe un sistem poate crea, deschide, citi, scrie și închide fișiere.</li>
    
                        <li class="info-content">PHP poate gestiona formulare, adică adună date din fișiere, salvează date într-un fișier, prin e-mail poate trimite date, returnează date către utilizator.</li>

                        <li class="info-content">Prin intermediul PHP puteți adăuga, șterge, modifica elemente în cadrul bazei de date.</li>

                        <li class="info-content">Accesați variabilele cookie și setați cookie-uri.</li>

                        <li class="info-content">Cu ajutorul PHP, puteți restricționa accesul utilizatorilor la anumite pagini ale site-ului dumneavoastră.</li>

                        <li class="info-content">Se pot cripta date.</li>
                    </div>
                </div>

                <hr>

                <div class="code-example">
                    <h1>Exemplu de cod in PHP</h1>
                          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php"><span><</span>?php
 echo 'Primul meu script in PHP'
?>
</div>
                      <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
                </div>
            </div>
        </div>

    </div>
</body>

<?php	
	include ("footer.php");
?>
</html>
