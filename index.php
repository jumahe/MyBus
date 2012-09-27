<?php
include("simple_html_dom.php");

/* Config for my Bus line on ratp.fr */
$html = file_get_html('http://www.ratp.fr/horaires/fr/ratp/bus/prochains_passages/PP/B161/161_61109_61191/A');

/* Custom parsing with simple_html_dom */
$passages = $html->find('div[id=prochains_passages] fieldset table tbody tr');

/* First printed line */
echo "#Bus RATP 161<br>-----<br>";

/* Next buses */
for( $i = 2; $i < count($passages); $i++ )
{
	echo "<font size='5'><b>".$passages[$i]->find("td", 1)."</b></font><br>";
}
?>