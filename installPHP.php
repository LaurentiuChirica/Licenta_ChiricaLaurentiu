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
            <div class="presentation-title">Instalare PHP</div>

            <div class="info-container">
              <p class="info-content">
                Puteți crea și testa în siguranță aplicații web folosind PHP pe PC-ul dumneavoastră, fără a afecta sistemul live.
              </p>

              <div class="info-content-container">
                  <p class="info-content">Aveți nevoie de următoarele programe pentru a utiliza PHP la nivel local:</p>

                  <li class="info-content">
                    Un server web compatibil cu PHP. Noi vom folosi, <a href="https://httpd.apache.org/" target=”_blank”>Apache</a> ca server web.
                  </li>

                  <li class="info-content">
                    Un server pentru baze de date. Se recomanda utilizarea serverului de baze de date MySQL.
                  </li>

                  <p class="info-content">
                    Prin urmare, este mai simplu să găsiți un pachet software care combină PHP cu un server web și un server de baze de date. XAMPP este unul dintre cele mai cunoscute medii de dezvoltare PHP.
                    XAMPP este o distribuție de servere web PHP, MariaDB și Apache care este simplu de instalat. Windows, Linux și macOS sunt suportate de XAMPP.                    
                  </p>
              </div>

              <hr>
            </div>


            <div class="info-container">
              <h1>Instalați XAMPP </h1>

              <div class="info-content-container">
                  <p class="info-content">Pentru a instala XAMPP pe Windows, puteți vizita site-ul oficial <a href="https://www.apachefriends.org/index.html" target="_blank">XAMPP</a> și descărca versiunea corespunzătoare platformei dumneavoastră.</p>

                  <p class="info-content">Pentru a instala XAMPP pe Windows, puteți urma acești pași:</p>

                  <h2>Pasul 1: Începeți instalarea</h2>

                  <p class="info-content">Pentru a instala XAMPP, faceți dublu clic pe fișierul descărcat:</p>

                  <img src="/images/install-php-step-1.png" class="tutorial-images">
                  
                  <h2>Pasul 2: Alegeți componentele instalației</h2>

                  <p class="info-content">Alegeți componentele relevante pentru instalare. Puteți alege Apache, MySQL, PHP și phpMyAdmin în această fază, deselectați următoarele elemente și apoi faceți clic pe butonul Next (Următorul) pentru a trece la următoarea etapă.</p>

                  <img src="/images/install-php-step-2.png" class="tutorial-images">

                  <h2>Pasul 3: Desemnarea dosarului de instalare</h2>
                  
                  <p class="info-content">Pentru a instala XAMPP, alegeți un dosar. Se recomandă instalarea XAMPP în folderul c:xampp. Pentru a trece la pasul următor, faceți clic pe butonul Next (Următorul).</p>

                  <img src="/images/install-php-step-3.png" class="tutorial-images">
                  

                  <h2>Pasul 4: Alegerea unei limbi</h2>
                  
                  <p class="info-content">Selectarea limbii xdin panoul de control XAMPP. Engleza este utilizată în mod implicit. Pentru a trece la pasul următor, puteți alege limba preferată și faceți clic pe butonul Next (Următorul).</p>

                  <img src="/images/install-php-step-4.png" class="tutorial-images">


                  <h2>Pasul 5. Bitnami pentru XAMPP</h2>
                  
                  <p class="info-content">Sunteți binevenit să omiteți acest pas, deoarece înțelegerea PHP nu necesită Bitnami. Pentru a trece la pasul următor, faceți pur și simplu clic pe butonul Next (Următorul).</p>

                  <img src="/images/install-php-step-5.png" class="tutorial-images">

                  <h2>Pasul 6: Porniți instalarea XAMPP.</h2>
                  
                  <p class="info-content">Acum puteți începe instalarea XAMPP. Pentru a începe instalarea, faceți clic pe butonul Next (Următorul). Aceasta se va termina în scurt timp.</p>

                  <img src="/images/install-php-step-6.png" class="tutorial-images">

                  
                  <h2>Pasul 7. Finalizarea configurației XAMPP</h2>
                  
                  <p class="info-content">Următorul ecran apare după finalizarea expertului de configurare XAMPP. Pentru a deschide panoul de control XAMPP, faceți clic pe butonul Finish (Terminare):</p>
                  
                  <img src="/images/install-php-step-7.png" class="tutorial-images">

                  <h2>Pasul 8: Finalizarea configurației XAMPP</h2>                  

                  <p class="info-content">Serviciile instalate sunt listate în panoul de control XAMPP. Faceți clic pe butonul Start corespunzător pentru a lansa un serviciu:</p>

                  <img src="/images/install-php-step-8.png" class="tutorial-images">
              </div>
            </div>
        </div>

    </div>
</body>

<?php	

	include ("footer.php");
?>
</html>
