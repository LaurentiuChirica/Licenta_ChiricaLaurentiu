

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
      <div class="presentation-title">Creare Baza de Date</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>
      
      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Metoda mysql_create_db() a fost eliminată din PHP 4.3. Se recomandă acum utilizarea uneia dintre cele două opțiuni.</p>

          <li class="info-content">mysqli_query()</li>

          <li class="info-content">PDO::__query()</li>

          <h2>Exemplu MySQLi</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$servername = "ExempluServer";</span>

            <span class="php-syntax-code">$username = "numeUtilizator";</span>

            <span class="php-syntax-code">$password = "parola";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">//Crearea unei conexiuni</span>

            <span class="php-syntax-code">$conn = new mysqli($servername, $username, $password);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">//Verificarea conexiunii</span>

            <span class="php-syntax-code">if ($conn->connect_error) {</span>

            <span class="php-syntax-code">die("Conexiunea a eșuat: " . $conn->connect_error);</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$sql = "CREATE DATABASE myDB";</span>

            <span class="php-syntax-code">if ($conn->query($sql) === TRUE) {</span>

            <span class="php-syntax-code">&nbsp;echo "Baza de date a fost creată cu succes";</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;echo "Eroare la crearea bazei de date: " . $conn->error;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$conn->close();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <h2>Exemplu PDO</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$servername = "exempluBazaDate";</span>

            <span class="php-syntax-code">$username = "numeUtilizator";</span>

            <span class="php-syntax-code">$password = "parola";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">try {</span>

            <span class="php-syntax-code">&nbsp;$conn = new PDO("mysql:host=$servername", $username, $password);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// Setează modul de eroare PDO la excepție</span>

            <span class="php-syntax-code">&nbsp;$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);</span>

            <span class="php-syntax-code">&nbsp;$sql = "CREATE DATABASE myDBPDO";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// Folosiți exec() pentru că nu sunt returnate rezultate</span>

            <span class="php-syntax-code">&nbsp;$conn->exec($sql);</span>

            <span class="php-syntax-code">&nbsp;echo "Database created successfully";</span>

            <span class="php-syntax-code">} catch(PDOException $e) {</span>

            <span class="php-syntax-code">&nbsp;echo $sql . " ". $e->getMessage();</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$conn = null;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content">O caracteristică fantastică a PDO este clasa de excepții, care ne permite să gestionăm orice probleme care pot apărea în timpul interogărilor bazei de date. Scriptul se oprește din lucru și sare direct la prima secțiune catch() dacă o excepție este aruncată în interiorul blocului try.</p>

        </div>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>

</html>