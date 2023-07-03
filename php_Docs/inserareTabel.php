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
      <div class="presentation-title">Inserare Date Tabel</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Introducere date în MySQL folosind MySQLi și PDO</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">După ce am creat o bază de date și un tabel, putem începe să le populăm cu date.</p>

          <p class="info-content">Reguli de sintaxa:</p>

          <li class="info-content">PHP cere ca interogarea SQL să fie citată.</li>

          <li class="info-content">Valorile șirurilor de caractere trebuie să fie citate în cadrul interogării SQL.</li>

          <li class="info-content">Numerele nu trebuie să fie cotate.</li>

          <li class="info-content">Null nu trebuie să fie citat în niciun fel.</li>

          <p class="info-content">Pentru a introduce noi înregistrări într-un tabel MySQL, utilizați instrucțiunea INSERT INTO:</p>

          <h2>Sintaxa</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">INSERT INTO numeTabel (coloana1, coloana2, coloana3,...)</span>

            <span class="php-syntax-example">VALUES (valoare1, valoare2, valoare3,...)</span>
          </div>
          
          <p class="info-content">Vom folosi tabel numit "Student" creat la capitolul anterior.</p>

          <h2>Exemplu MySQLi</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$servername = "localhost";</span>

            <span class="php-syntax-code">$username = "numeUtilizator";</span>

            <span class="php-syntax-code">$password = "parola";</span>

            <span class="php-syntax-code">$dbname = "exempluBazaDate";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// Crearea conexiunii</span>

            <span class="php-syntax-code">$conn = new mysqli($servername, $username, $password, $dbname);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// Verificarea conexiunii</span>

            <span class="php-syntax-code">if ($conn->connect_error) {</span>

            <span class="php-syntax-code">>&nbsp;die("Conexiunea a esuat: " . $conn->connect_error);</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">$sql = "INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('John', 'Doe', 'john@example.com')";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;if ($conn->query($sql) === TRUE) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Înregistrare nouă creată cu succes";</span>

            <span class="php-syntax-code">&nbsp;} else {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Eroare: " . $sql . " " . $conn->error;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">$conn->close();</span>

            <span class="php-syntax-example">?></span>
          </div>
          
          <br>

          <h2>Exemplu PDO</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$servername = "localhost";</span>

            <span class="php-syntax-code">$username = "numeUtilizator";</span>

            <span class="php-syntax-code">$password = "parola";</span>

            <span class="php-syntax-code">$dbname = "exempluBazaDate";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">try {</span>

            <span class="php-syntax-code">&nbsp;$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// setează modul de eroare PDO la excepție</span>

            <span class="php-syntax-code">&nbsp;$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;$sql = "INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('John', 'Doe', 'john@example.com')";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// utilizați exec() deoarece nu sunt returnate rezultate</span>

            <span class="php-syntax-code">&nbsp;$conn->exec($sql);</span>

            <span class="php-syntax-code">&nbsp;echo "Înregistrare nouă creată cu succes";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">} catch(PDOException $e) {</span>

            <span class="php-syntax-code">&nbsp;echo $sql . " " . $e->getMessage();</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$conn = null;</span>

            <span class="php-syntax-example">?></span>
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