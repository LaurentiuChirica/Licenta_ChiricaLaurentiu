

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
                    
                    <hr>
                    <div class="info-content-container">
                        <span class="info-content">
                            PHP este un limbaj de scripting pentru server și un instrument puternic pentru crearea de pagini web dinamice și interactive.
                        </span>
    
                        <span class="info-content">
                            PHP este o alternativă utilizată pe scară largă, gratuită și eficientă față de concurenți precum ASP-ul Microsoft.
                        </span>
                    </div>
                    <hr>
                </div>

                <div class="code-example">
                    <h2>Exemplu de cod compilator facut local</h2>
			        <?php include('live_compiler.php'); ?>
                    
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
