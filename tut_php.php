

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI - Aplicatii Internet</title>
    <link href="reusable_tut_php.css" rel="stylesheet" />
</head>

<?php
	include ("header.php");
	
	// echo "\n\t<!-- main -->\n\t<div id=\"main\">\n\t <div id=\"content2\">\n\t  <div id=\"text2\">\n\t  <h1>Tutoriale PHP</h1>\n\t  <br />";
	echo "\n\t";
?>
<body>
    <div class="main-content">
        <div class="side-navbar-container">
			<?php include('sidenavbar.php'); ?>
        </div>

        <div class="main-content-container">
            <div class="presentation-title">Prezentare Generala a PHP</div>

            <div class="info-container">

                <div class="first-content-box">
                    <h1>Invata PHP</h1>
                    
                    <hr class="separation-line">

                    <span>
                        PHP este un limbaj de scripting pentru server și un instrument puternic pentru crearea de pagini web dinamice și interactive.
                    </span>

                    <span>
                        PHP este o alternativă utilizată pe scară largă, gratuită și eficientă față de concurenți precum ASP-ul Microsoft.
                    </span>
                </div>

                <div class="first-content-box">
                    <h2>Exemplu de cod compilator facut local</h2>
                    <?php
                        if (isset($_POST['submit'])) {
                            $cod = $_POST['cod'];

                            ob_start();
                            eval("?>" . $cod);
                            $rezultat = ob_get_contents();
                            ob_end_clean();
                        } else {
                            // dacă nu s-a trimis un formular, utilizați valoarea implicită
                            $cod = "<?php echo 'Primul meu cod scris in php' ?>";
                        }
                    ?>

                    <form method="post" class="compilerForm">
                        <label for="cod">Introduceți codul:</label>
                        <br>
                        <textarea class="codeWritingArea" name="cod" id="cod" rows="10" cols="50" pattern="^((?!\')(?!\").)*$"><?php echo htmlspecialchars($cod); ?></textarea>
                        <div id="codError" style="color: red; font-size:1.125rem; display: none;">Codul trebuie să fie scris în PHP și să nu conțină string-uri simple</div>
                        <br>
                        <input class="inputButton" type="submit" name="submit" value="Execută">
                    </form>

                    <?php if (isset($rezultat)): ?>
                        <h2>Rezultat:</h2>
                        <pre><?php echo htmlspecialchars($rezultat); ?></pre>
                    <?php endif; ?>

                    <script>
                        const form = document.querySelector('form');
                        const textarea = document.querySelector('#cod');
                        const codError = document.querySelector('#codError');
                        form.addEventListener('submit', (event) => {
                            if (isValidCode(textarea.value)) {
                                event.preventDefault();
                                codError.style.display = 'block';
                                codError.style.height = '20px';
                            }
                        });
                        function isValidCode(code) {
                            const regex = /^((?!\')(?!\").)*$/;
                            return regex.test(code);
                        }
                    </script>
                </div>

                <div class="first-content-box">
                    Exemplu de API pentru rulare cod local in php

                </div>
            </div>
        </div>

    </div>
</body>

<?php	
	// echo "\n\t</ul></div></div><div id=\"push\"></div></div>"; 

	include ("footer.php");
?>
</html>
