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

          <p class="info-content">O declaratie pregătită este o caracteristică care vă permite să executați în mod eficient aceleași comenzi SQL (sau comenzi similare) din nou și din nou.</p>

          <p class="info-content">Declarațiile pregătite funcționează după cum urmează:</p> 

          <p class="info-content"><b>1.</b> Pregătiți: Un șablon pentru o instrucțiune SQL este creat și livrat bazei de date. Valorile incomplete sunt cunoscute sub numele de parametri și sunt indicate prin semnul întrebării ("?")</p>
          
          <p class="info-content">Exemplu: INSERT INTO MyGuests VALUES(?,?,?,?)</p>

          <p class="info-content"><b>2.</b> Șablonul de instrucțiuni SQL este analizat, compilat și optimizat de baza de date, care stochează apoi rezultatul fără a-l executa efectiv.</p>

          <p class="info-content"><b>3.</b> Se execută: Baza de date execută instrucțiunea după ce aplicația leagă valorile parametrilor la un moment dat. Instrucțiunea poate fi executată de program de câte ori este necesar cu diverse valori.</p>

          <p class="info-content">Avantaje:</p>

          <li class="info-content">Deoarece interogarea este pregătită doar o singură dată (în ciuda faptului că instrucțiunea este executată de mai multe ori), instrucțiunile pregătite accelerează analiza.</li>

          <li class="info-content">Parametrii legați reduc cantitatea de date trimise către server, deoarece trebuie să transmiteți doar parametrii de fiecare dată, în loc de întreaga interogare.</li>
          
          <li class="info-content">Deoarece valorile parametrilor care sunt transferate ulterior cu ajutorul unui protocol separat nu trebuie să fie scăpate în mod corespunzător, declarațiile pregătite sunt extrem de utile în protejarea împotriva injecțiilor SQL. Injectarea SQL este imposibilă dacă șablonul declarației inițiale nu este derivat din date externe.</li>


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

            <span class="php-syntax-code">// pregătirea și legarea</span>

            <span class="php-syntax-code">$stmt = $conn->prepare("INSERT INTO Student (prenume, nume, email) VALUES (?, ?, ?)");</span>

            <span class="php-syntax-code">$stmt->bind_param("sss", $prenume, $nume, $email);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// setați parametrii și executați</span>

            <span class="php-syntax-code">$prenume = "John";</span>

            <span class="php-syntax-code">$nume = "Doe";</span>

            <span class="php-syntax-code">$email = "john@example.com";</span>

            <span class="php-syntax-code">$stmt->execute();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$firstname = "Trevor";</span>

            <span class="php-syntax-code">$lastname = "Davis";</span>

            <span class="php-syntax-code">$email = "trevor@example.com";</span>

            <span class="php-syntax-code">$stmt->execute();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$firstname = "Michael";</span>

            <span class="php-syntax-code">$lastname = "Anderson";</span>

            <span class="php-syntax-code">$email = "michael@example.com";</span>

            <span class="php-syntax-code">$stmt->execute();</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">echo "Noi înregistrări create cu succes";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$stmt->close();</span>

            <span class="php-syntax-code">$conn->close();</span>

            <span class="php-syntax-example">?></span>
          </div>
          
          <br>

          <h2>Explicatii</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">"INSERT INTO Student (prenume, nume, email) VALUES (?, ?, ?)"</span>

            <span class="php-syntax-code">$stmt->bind_param("sss", $prenume, $nume, $email);</span>
          </div>

          <p class="info-content">În cazul în care dorim să înlocuim o valoare întreagă, text, dublă sau blob în SQL, introducem în schimb un semn de întrebare (?).</p>

          <p class="info-content">Funcția bind_param() notifică baza de date cu privire la parametri și îi leagă de interogarea SQL. Categoriile de date ale parametrilor sunt enumerate în argumentul "sss". Mysql este informat că parametrul este un șir de caractere prin caracterul s.</p>

          <p class="info-content">Există patru forme posibile de argumente:</p>

          <li class="info-content">i - număr întreg</li>

          <li class="info-content">d - dublu</li>

          <li class="info-content">s - șir de caractere</li>

          <li class="info-content">b - BLOB</li>

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

            <span class="php-syntax-code">&nbsp;// pregătiți sql și legați parametrii</span>

            <span class="php-syntax-code">&nbsp;$stmt = $conn->prepare("INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES (:prenume, :nume, :email)");</span>

            <span class="php-syntax-code">&nbsp;$stmt->bindParam(':prenume', $prenume);</span>

            <span class="php-syntax-code">&nbsp;$stmt->bindParam(':nume', $nume);</span>

            <span class="php-syntax-code">&nbsp;$stmt->bindParam(':email', $email);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// inserați un rând</span>

            <span class="php-syntax-code">&nbsp;$prenume = "John";</span>

            <span class="php-syntax-code">&nbsp;$nume = "Doe";</span>

            <span class="php-syntax-code">&nbsp;$email = "john@example.com";</span>

            <span class="php-syntax-code">&nbsp;$stmt->execute();</span>

            <span class="php-syntax-code">&nbsp;// inserați un alt rând</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;$prenume = "Mary";</span>

            <span class="php-syntax-code">&nbsp;$nume = "Moe";</span>

            <span class="php-syntax-code">&nbsp;$email = "mary@example.com";</span>

            <span class="php-syntax-code">&nbsp;$stmt->execute();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// inserați un alt rând</span>

            <span class="php-syntax-code">&nbsp;$prenume = "Julie";</span>

            <span class="php-syntax-code">&nbsp;$nume = "Dooley";</span>

            <span class="php-syntax-code">&nbsp;$email = "julie@example.com";</span>

            <span class="php-syntax-code">&nbsp;$stmt->execute();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;echo "Noi înregistrări create cu succes";</span>

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

<?php include("footer.php"); ?>

</html>