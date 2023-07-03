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
      <div class="presentation-title">Declaratia Delete</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>La ce este folosita declaratia Delete?</h1>

          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <p class="info-content">Pentru a elimina înregistrări dintr-un tabel, utilizați instrucțiunea DELETE.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">DELETE FROM table_name</span>

            <span class="php-syntax-example">WHERE o_coloană = o_valoare</span>
          </div>

          <p class="info-content">În sintaxa DELETE, veți vedea clauza WHERE: Înregistrarea sau înregistrările care urmează să fie șterse sunt specificate prin clauza WHERE. Clauza WHERE trebuie să fie prezentă, altfel toate înregistrările vor fi șterse!</p>

          <p class="info-content">În baza de date "Student", următoarele exemple șterg intrarea cu id = 3</p>
          
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

            <span class="php-syntax-code">$sql = "DELETE FROM Student WHERE id=3";</span>

            <span class="php-syntax-code"></span>   

            <span class="php-syntax-code">if ($conn->query($sql) === TRUE) {</span>

            <span class="php-syntax-code">&nbsp;  echo "Înregistrare ștearsă cu succeS";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;echo "Eroare la ștergerea înregistrării: " . $conn->error;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$conn->close();</span>

            <span class="php-syntax-example">?></span>
          </div>
          
          <br>

          <h2>Exemplu</h2>

          <p class="info-content">Urmatorul exemplu selectează coloanele id, prenume și nume din tabelul Student, unde numele de familie este "Doe", și le afișează într-un tabel HTML</p>

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

            <span class="php-syntax-code">&nbsp;$sql = "DELETE FROM Student WHERE id=3";</span>

            <span class="php-syntax-code">&nbsp;$stmt->execute();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;$conn->exec($sql);</span>

            <span class="php-syntax-code">&nbsp;echo "Înregistrare ștearsă cu succes";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">} catch(PDOException $e) {</span>

            <span class="php-syntax-code">&nbsp;echo "Eroare: " . $e->getMessage();</span>

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