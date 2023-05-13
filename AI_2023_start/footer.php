<?php
$Bamby = "Aplicatii Internet";
$an = date("Y");
$footer = <<< FOOTER

	<!-- footer -->
    <div id="footer">
		<table>
  		<tr>
    		<th align="left"> &nbsp;&nbsp;&nbsp;&nbsp; {$Bamby}</th>
    		<th align="right">{$an} &nbsp;&nbsp;&nbsp;&nbsp;</th>
  		</tr>
		</table>
    </div>
    <!-- end footer -->
    
</body>
</html>
FOOTER;
echo $footer;
?>