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
      <div class="presentation-title">Manipulare Formulare</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este un formular?</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Un formular PHP este un element al unei pagini web care permite utilizatorilor să trimită și să prelucreze informații pe serverul web.</p>

          <p class="info-content">Elementul <code class="code-elements">&lt;form></code> se utilizează după cum urmează pentru a crea un formular:</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;form action="form.php" method="post"></span>

            <span class="php-syntax-example">&lt;/form></span>
          </div>

          <p class="info-content">Există două caracteristici esențiale pentru elementul <code class="code-elements">&lt;form></code>:</li>

          <li class="info-content"><b>action:</b> indică URL-ul care este folosit pentru procesarea trimiterii formularului. În acest exemplu, formularul va fi procesat de form.php.</li>

          <li class="info-content"><b>method:</b> descrie metoda de trimitere a formularului HTTP. De cele mai multe ori, metodele de formular sunt <code class="code-elements">POST</code> și <code class="code-elements">GET</code>. Acest exemplu folosește metoda formularului post.</li>

          <p class="info-content">Metoda formularului nu este sensibilă la majuscule și minuscule. Implicația este că puteți utiliza fie post, fie POST. Elementul de formular va utiliza automat metoda get dacă nu specificați proprietatea method.</p>

          <p class="info-content">Un formular are, de obicei, unul sau mai multe elemente de intrare, cum ar fi text, parole, căsuțe de bifat, butoane radio, căsuțe de selectare, încărcări de fișiere etc. Câmpurile de formular sunt un alt nume pentru elementele de intrare.</p>

          <p class="info-content">Numele, tipul și valoarea sunt trei caracteristici esențiale ale unui element de intrare. Pentru ca PHP să acceseze valoarea, se va folosi atributul <code class="code-elements">name</code>.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;form action="form.php" method="post"></span>

            <span class="php-syntax-code">&nbsp;Nume: &lt;input type="text" name="name"><br></span>

            <span class="php-syntax-code">&nbsp;Email: &lt;input type="text" name="email"><br></span>

            <span class="php-syntax-code">&nbsp;&lt;input type="submit"></span>

            <span class="php-syntax-example">&lt;/form></span>
          </div>

          <h2>form.php:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare &lt;?php echo $_POST["name"]; ?></span>
            
            <span class="php-syntax-code">Adresa ta de email este: &lt;?php echo $_POST["email"]; ?></span>
          </div>

          <h2>Exemplu de Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare John</span>
            
            <span class="php-syntax-code">Adresa ta de email este john.doe@gmail.com</span>
          </div>

          <h1>Get vs Post</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Atunci când un formular solicită doar date de la server, ar trebui să utilizați în general metoda GET. Un formular de căutare care permite utilizatorilor să caute informații, de exemplu, ar trebui să utilizeze metoda GET.</p>

          <p class="info-content">Folosiți metoda POST ori de câte ori formularul dumneavoastră solicită o modificare de la server. De exemplu, metoda POST ar trebui să fie utilizată pentru formularele care permit utilizatorilor să se înscrie la buletine informative.</p>


          <h1>Când folosiți GET?</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Toată lumea poate vedea informațiile trimise dintr-un formular folosind tehnica GET (toate numele și valorile variabilelor sunt expuse în URL). Cantitatea de date care poate fi trimisă prin GET este, de asemenea, limitată. Numărul de caractere este limitat la aproximativ 2000. Cu toate acestea, este posibil să se marcheze site-ul web, deoarece variabilele sunt vizibile în URL. Acest lucru poate fi util ocazional.</li>

          <li class="info-content">Datele care nu sunt sensibile pot fi trimise folosind GET.</li>

          <p class="info-content"><b>Notă:</b> Nu transmiteți NICIODATĂ parole sau alte informații sensibile prin metoda GET!</p>


          <h1>Când folosiți POST?</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <li class="info-content">Nu există restricții privind cantitatea de informații care pot fi transmise atunci când se utilizează metoda POST pentru a transmite informații dintr-un formular, deoarece toate numele și valorile sunt încorporate în corpul cererii HTTP.</li>

          <li class="info-content">În plus, POST oferă caracteristici de ultimă generație, inclusiv suport pentru introducerea de date binare în mai multe părți atunci când se încarcă fișiere pe un server.</li>

          <li class="info-content"><b>Notă:</b>Cu toate acestea, marcarea site-ului web nu este o opțiune, deoarece variabilele nu sunt vizibile în URL.</li>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>
</html>