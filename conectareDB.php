

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
      <div class="presentation-title">Conectare la Baza de Date</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Deschiderea conexiunii la baza de date</h1>

          <p class="info-content">O bază de date MySQL poate fi utilizată cu PHP 5 și versiunile ulterioare:</p>

          <li class="info-content">Extensia MySQLi (i înseamnă "îmbunătățit")</li>

          <li class="info-content">PDO (Obiecte de date PHP)</li>

          <p class="info-content">Extensia MySQL a fost utilizată în versiunile anterioare ale PHP. Dar, în 2012, această extensie nu mai era susținută.</p>

          <h1>Descărcare MySQLi</h1>
          
          <p class="info-content">Pentru Linux și Windows: Atunci când este instalat pachetul php5 mysql, extensia MySQLi este adesea instalată automat.</p>

          <p class="info-content">Vizitați <a href="http://php.net/manual/en/mysqli.installation.php">http://php.net/manual/en/mysqli.installation.php</a> pentru mai multe informații despre instalare.</p>

          <h1>Descărcare PDO</h1>
          
          <p class="info-content">Vizitați <a href="http://php.net/manual/en/pdo.installation.php">http://php.net/manual/en/pdo.installation.php</a> pentru mai multe informații despre instalare.</p>

          <h1>Funcția mysql_connect</h1>

          <p class="info-content">Pentru a stabili o conexiune la o bază de date, PHP oferă funcția mysql_connect. În caz de succes, această funcție produce o identificare a legăturii MySQL; în caz contrar, returnează FALSE. Aceasta necesită cinci parametri.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">connection mysql_connect(server, utilizator, parolă, link nou, indicator de client);</span>
          </div>

          <div class="table-container">
            <table>
              <tr>
                <th>Parametru</th>
                <th>Descriere</th>
              </tr>
              <tr>
                <td>server</td>
                <td>Opțional - Numele gazdei pe care rulează serverul bazei de date. Dacă nu este specificată, valoarea implicită este localhost:3306.</td>
              </tr>
              <tr>
                <td>utilizator</td>
                <td>Opțional - Numele de utilizator care accesează baza de date. Dacă nu este specificat, valoarea implicită este numele utilizatorului care deține procesul serverului.</td>
              </tr>
              <tr>
                <td>parolă</td>
                <td>Opțional - Parola utilizatorului care accesează baza de date. Dacă nu este specificată, valoarea implicită este o parolă goală.</td>
              </tr>
              <tr>
                <td>link nou</td>
                <td>Opțional - Dacă se face un al doilea apel la mysql_connect() cu aceleași argumente, nu se va stabili o nouă conexiune; în schimb, se va returna identificatorul conexiunii deja deschise.</td>
              </tr>
              <tr>
                <td>indicator de client</td>
                <td>
                  Opțional - O combinație a următoarelor constante:

                  <li class="info-content">MYSQL_CLIENT_SSL - Utilizați criptarea SSL</li>

                  <li class="info-content">MYSQL_CLIENT_COMPRESS - Utilizați protocolul de compresie</li>

                  <li class="info-content">MYSQL_CLIENT_IGNORE_SPACE - Permite spațiu după numele funcțiilor</li>

                  <li class="info-content">MYSQL_CLIENT_CLIENT_INTERACTIVE - Permite un timeout interactiv de câteva secunde de inactivitate înainte de a închide conexiunea</li>
                </td>
              </tr>
            </table>            
          </div>
          
          <h1>Deschiderea unei conexiuni la MySQL</h1>

          <p class="info-content">Trebuie să ne putem conecta la server înainte de a putea vizualiza datele din baza de date MySQL.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$servername = "localhost";</span>

            <span class="php-syntax-code">$username = "username";</span>

            <span class="php-syntax-code">$password = "password";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">//Crearea unei conexiuni</span>

            <span class="php-syntax-code">$conn = new mysqli($servername, $username, $password);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">//Verificarea conexiunii</span>

            <span class="php-syntax-code">if ($conn->connect_error) {</span>

            <span class="php-syntax-code">die("Conexiunea a eșuat: " . $conn->connect_error);</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">echo "Conectat cu succes";</span>

            <span class="php-syntax-example">&lt;?></span>
          </div>

          <br>

          <h1>Deschiderea unei conexiuni la PDO</h1>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$servername = "localhost";</span>

            <span class="php-syntax-code">$username = "username";</span>

            <span class="php-syntax-code">$password = "password";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">try {</span>

            <span class="php-syntax-code">$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);</span>

            <span class="php-syntax-code">// setați modul de eroare PDO la excepție</span>

            <span class="php-syntax-code">$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);</span>

            <span class="php-syntax-code">echo "Conectat cu succes";</span>

            <span class="php-syntax-code">} catch(PDOException $e) {</span>

            <span class="php-syntax-code">echo "Conexiunea a eșuat: " . $e->getMessage();</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">&lt;?></span>
          </div>

          <br>

          <h1>Închiderea conexiunii</h1>

          <p class="info-content">Exemplu MySQLi:</p>

          <div class="static-code-example">
            <span class="php-syntax-example">$conn->close();</span>
          </div>

          <p class="info-content">Exemplu PDO:</p>

          <div class="static-code-example">
            <span class="php-syntax-example">$conn = null;</span>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>