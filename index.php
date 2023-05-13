<?php
	include ("header.php");
	
	$home = <<< HOME
    <!-- main -->
<div id="main">
        <div id="content">
        <div id="text">
        <h1>Bun venit!</h1>
HOME;
	echo $home;
	echo '
        <p>
                &nbsp;&nbsp;&nbsp;&nbsp;'.conv2utf8('
				Disciplina face parte din categoria disciplinelor tehnice, cu caracter aplicativ, cu orientare către domeniul informatic şi 
				finalizează un proces de structurare graduală, pe verticală, a disciplinelor programarea calculatoarelor (anii I si II) şi 
				Tehnici de programare independente de platformă (III), pe care, de altfel, le consideră o premiză a dezvoltării cursului.
				Obiectivul disciplinei este acela ca studenţii sa capete competenţe privind dezvoltarea de aplicaţii Web folosind tehnologii de 
				tipul HTML, XML, scriptare locală (Javascript) si pe server (PHP).
').'
                <br /><br />
                &nbsp;&nbsp;&nbsp;&nbsp;'.conv2utf8('Cursul are un pronunţat caracter practic, aplicativ şi poate mai puţin un caracter teoretic. Ca urmare, demersul teoretic este în 
				permanenţă urmat de numeroase exemple, care să uşureze înţelegerea şi să justifice abordarea făcută.').'
				<br /><br />
		</p>';
		
	echo "\n\t<div id=\"pics\">\n\t<center>\n";
			
	for($i=0;$i<count($tag);$i++){
		echo '<a class="pic" rel="PATR" title="'.$tag[$i].'" href="images/Pics/Pic_'.($i+1).'M.jpg">';
		echo '<img src="images/Pics/Pic_'.($i+1).'.jpg" alt="" /></a> &nbsp; &nbsp; &nbsp;';
		if (($i+1) % 3 == 0 )
			echo "<br /><br />\n";
	}
				
	echo "\n\t</center>\n\t\t</div>\n\t</div>\n<!-- end main -->";
	
	include ("anunturi.php");
	include ("footer.php");
?>	