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
    <div class="presentation-title">Încărcare Fișiere</div>

    <div class="next-previous-buttons-container">
      <?php include('../next_previous_buttons.php');?>
    </div>

    <div class="info-container">
      <div class="info-content-container">
        <h1>Superglobalul $_FILES</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Este simplu să încărcați fișiere pe server folosind PHP. PHP vă permite să încărcați atât fișiere unice, cât și numeroase fișiere cu o cantitate mică de cod.</p>
        
        <p class="info-content">Puteți încărca atât fișiere binare, cât și fișiere text utilizând funcțiile de încărcare a fișierelor din PHP. În plus, funcțiile de operare și autentificare a fișierelor din PHP vă oferă un control complet asupra fișierului care va fi încărcat.</p>

        <p class="info-content">Toate informațiile despre fișiere sunt conținute în variabila globală PHP $_FILES. Cu ajutorul variabilei globale $_FILES putem prelua numele fișierului, tipul fișierului, dimensiunea fișierului, numele fișierului temporar și erorile legate de fișier.</p>
        
        <p class="info-content">Aici, presupunem că numele fișierului este nume de filename.</p>

        <div class="table-container">
          <table>
            <tr>
              <th>Variabila</th>
              <th>Descriere</th>
            </tr>
            <tr>
              <td>$_FILES['filename']['name']</td>
              <td>Returnează numele fișierului.</td>
            </tr>
            <tr>
              <td>$_FILES['filename']['type']</td>
              <td>Returnează tipul MIME al fișierului.</td>
            </tr>
            <tr>
              <td>$_FILES['filename']['size']</td>
              <td>Returnează dimensiunea fișierului (în bytes).</td>
            </tr>
            <tr>
              <td>$_FILES['filename']['tmp_name']</td>
              <td>Returnează numele fișierului temporar al fișierului care a fost stocat pe server.</td>
            </tr>
            <tr>
              <td>$_FILES['filename']['error']</td>
              <td>Returnează codul de eroare asociat cu acest fișier.</td>
            </tr>
          </table>
        </div>
        
        <h1>Funcția move_uploaded_file()</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Fișierul încărcat este mutat într-o nouă locație cu ajutorul funcției move_uploaded_file(). Pe plan intern, funcția move_uploaded_file() verifică dacă fișierul a fost încărcat printr-o cerere POST. În cazul în care un fișier este încărcat printr-o cerere POST, acesta este mutat.</p>
        
        <h2>Sintaxa:</h2>
        
        <div class="static-code-example">
          <span class="php-syntax-code">bool move_uploaded_file ( string $filename , string $destination )</span>
        </div>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;form action="uploader.php" method="post" enctype="multipart/form-data"></span>

          <span class="php-syntax-code">&nbsp;&nbsp;Selectați Fișier:</span>

          <span class="php-syntax-code">&nbsp;&nbsp;&lt;input type="file" name="fisierDeIncarcat"/></span>

          <span class="php-syntax-code">&nbsp;&nbsp;&lt;input type="submit" value="incarcaImagine" name="submit"/></span>

          <span class="php-syntax-example">&lt;/form></span>
        </div>

        <br>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">target_path = "e:/";  </span>

          <span class="php-syntax-code">$target_path = $target_path.basename( $_FILES['fisierDeIncarcat']['name']);</span>

          <span class="php-syntax-code">if(move_uploaded_file($_FILES['incarcaImagine']['tmp_name'], $target_path)) {</span>

          <span class="php-syntax-code">&nbsp;echo "Fișier încărcat cu succes!";</span>

          <span class="php-syntax-code">} else {</span>

          <span class="php-syntax-code">&nbsp;echo "Fișierul nu a fost încărcat, vă rugăm să încercați din nou!";</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>
        </div>
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