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
      <div class="presentation-title">Declaratii Pregatite</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o declaratie pregatita?</h1>

          <p class="info-content">Metoda mysqli_multi_query() trebuie să fie utilizată pentru a rula mai multe instrucțiuni SQL.</p>

          <p class="info-content">Ar trebui adăugate 3 noi înregistrări în baza de date "Student".</p>

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

            <span class="php-syntax-code">&nbsp;die("Conexiunea a esuat: " . $conn->connect_error);</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">$sql = "INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('John', 'Doe', 'john@example.com')";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$sql .= "INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('Trevor', 'Anderson', 'trevor@example.com')";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$sql .= "INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('Michael', 'Davis', 'michael@example.com')";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;if ($conn->query($sql) === TRUE) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Înregistrări noi create cu succes";</span>

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

            <span class="php-syntax-code">&nbsp;// Inceperea tranzactiei</span>

            <span class="php-syntax-code">&nbsp;$conn->beginTransaction();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// Declaratiile SQL</span>

            <span class="php-syntax-code">&nbsp;$conn->exec("INSERT INTO Student (nume, prenume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('John', 'Doe', 'john@example.com')");</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;$conn->exec("INSERT INTO Student (nume, prenume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('Trevor', 'Anderson', 'trevor@example.com')");</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">&nbsp;$conn->exec("INSERT INTO Student (nume, prenume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('Michael', 'Davis', 'michael@example.com')");</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// confirmă tranzacția</span>

            <span class="php-syntax-code">&nbsp;$conn->commit();</span>

            <span class="php-syntax-code">&nbsp;echo "Noi înregistrări create cu succes";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">} catch(PDOException $e) {</span>

            <span class="php-syntax-code">&nbsp;// întoarce tranzacția dacă ceva a eșuat</span>

            <span class="php-syntax-code">&nbsp;$conn->rollback();</span>

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

<?php include("footer.php"); ?>

</html>