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
      <div class="presentation-title">$_SERVER</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Super-variabila globală PHP numită $_SERVER conține date despre locațiile scripturilor, căile de acces și antetele.</p>

          <p class="info-content">Cele mai importante componente care pot fi incluse în $_SERVER sunt enumerate în tabelul următor:</p>

          <table>
            <tr>
              <th>Element</th>
              <th>Descriere</th>
            </tr>
            <tr>
              <td>$_SERVER['PHP_SELF'] </td>
              <td>Returnează numele de fișier al scriptului care se execută în prezent</td>
            </tr>
            <tr>
              <td>$_SERVER['GATEWAY_INTERFACE'] </td>
              <td>Returnează versiunea de interfață comună de gateway (CGI) pe care o utilizează serverul.</td>
            </tr>
            <tr>
              <td>$_SERVER['SERVER_ADDR'] </td>
              <td>Returnează adresa IP a serverului gazdă.</td>
            </tr>
            <tr>
              <td>$_SERVER['SERVER_NAME'] </td>
              <td>Returnează numele serverului gazdă (cum ar fi www.google.com)</td>
            </tr>
            <tr>
              <td>$_SERVER['SERVER_SOFTWARE'] </td>
              <td>Returnează șirul de identificare a serverului (cum ar fi Apache/2.2.24).</td>
            </tr>
            <tr>
              <td>$_SERVER['SERVER_PROTOCOL'] </td>
              <td>Returnează numele și revizuirea protocolului de informare (cum ar fi HTTP/1.1)</td>
            </tr>
            <tr>
              <td>$_SERVER['REQUEST_METHOD'] </td>
              <td>Returnează metoda de solicitare utilizată pentru a accesa pagina (cum ar fi POST)</td>
            </tr>
            <tr>
              <td>$_SERVER['REQUEST_TIME'] </td>
              <td>Returnează marca temporală a începutului solicitării (cum ar fi 1377687496)</td>
            </tr>
            <tr>
              <td>$_SERVER['QUERY_STRING'] </td>
              <td>Returnează șirul de interogare în cazul în care pagina este accesată printr-un șir de interogare</td>
            </tr>
            <tr>
              <td>$_SERVER['HTTP_ACCEPT'] </td>
              <td>Returnează antetul Accept din cererea curentă</td>
            </tr>
            <tr>
              <td>$_SERVER['HTTP_ACCEPT_CHARSET'] </td>
              <td>Returnează antetul Accept_Charset din cererea curentă (cum ar fi utf-8,ISO-8859-1)</td>
            </tr>
            <tr>
              <td>$_SERVER['HTTP_HOST'] </td>
              <td>Returnează antetul Host din cererea curentă.</td>
            </tr>
            <tr>
              <td>$_SERVER['HTTP_REFERER'] </td>
              <td>Returnează URL-ul complet al paginii curente (nu este fiabil deoarece nu toate agențiile de utilizator îl acceptă).</td>
            </tr>
            <tr>
              <td>$_SERVER['HTTPS'] </td>
              <td>Este scriptul interogat printr-un protocol HTTP securizat</td>
            </tr>
            <tr>
              <td>$_SERVER['REMOTE_ADDR'] </td>
              <td>Returnează adresa IP de la care utilizatorul vizualizează pagina curentă.</td>
            </tr>
            <tr>
              <td>$_SERVER['REMOTE_HOST'] </td>
              <td>Returnează numele gazdei de la care utilizatorul vizualizează pagina curentă</td>
            </tr>
            <tr>
              <td>$_SERVER['REMOTE_PORT'] </td>
              <td>Returnează portul utilizat pe calculatorul utilizatorului pentru a comunica cu serverul web.</td>
            </tr>
            <tr>
              <td>$_SERVER['SCRIPT_FILENAME']</td>
              <td>Întoarce numele absolut al traseului scriptului care se execută în prezent.</td>
            </tr>
            <tr>
              <td>$_SERVER['SERVER_ADMIN'] </td>
              <td>Returnează valoarea dată la directiva SERVER_ADMIN din fișierul de configurare a serverului web (dacă scriptul dvs. rulează pe o gazdă virtuală, aceasta va fi valoarea definită pentru acea gazdă virtuală) (de exemplu someone@w3schools.com).</td>
            </tr>
            <tr>
              <td>$_SERVER['SERVER_PORT'] </td>
              <td>Returnează portul de pe serverul de pe calculatorul server utilizat de serverul web pentru comunicare (de exemplu 80).</td>
            </tr>
            <tr>
              <td>$_SERVER['SERVER_SIGNATURE'] </td>
              <td>Returnează versiunea serverului și numele gazdei virtuale care sunt adăugate la paginile generate de server.</td>
            </tr>
            <tr>
              <td>$_SERVER['PATH_TRANSLATED']</td>
              <td>Returnează calea bazată pe sistemul de fișiere către scriptul curent</td>
            </tr>
            <tr>
              <td>$_SERVER['SCRIPT_NAME'] </td>
              <td>Returnează calea de acces la scriptul curent</td>
            </tr>
            <tr>
              <td>$_SERVER['SCRIPT_URI'] </td>
              <td>Returnează URL-ul paginii curente</td>
            </tr>
          </table>     
        </div>
        <hr>
        <div class="info-content-container">

          <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
echo $_SERVER['PHP_SELF'];
echo "\n\n";
echo $_SERVER['SCRIPT_NAME'];
?>
</div>
          <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
        </div>
      </div>
    </div>

  </div>
</body>

<?php include("footer.php"); ?>

</html>