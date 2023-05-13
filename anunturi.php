<?php 
	echo "\n<div id=\"sidebar\">\n\t";
	if ($anunturi != NULL) {
		 echo "<h2>Anunturi</h2>\n\t<p align=\"justify\">";
		 for($i=0;$i<count($anunturi);$i+=1) {
			echo conv2utf8($anunturi[$i]).'<br /><br />';
		 }
		 echo "\n\t</p></div></div><div id=\"push\"></div></div>";
	}
	else echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></p></div></div><div id="push"></div></div>'; 
?>