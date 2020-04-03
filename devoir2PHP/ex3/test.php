<?php 
	$month=$_POST['month'];
	$day=$_POST['day'];
	$year=$_POST['year'];
	if (isset($_POST['submit'])) {
		if (checkdate($month, $day, $year)) {
			echo "<h1>Validation de la date</h1>";
			echo "la date saisie est : <strong>".$day."/".$month."/".$year."</strong><br>";
			echo "<strong>La date saisie <font color='green'>est valide</font></strong>";
		}
		else {
			echo "<h1>Validation de la date</h1>";
			echo "la date saisie est : <strong>".$day."/".$month."/".$year."</strong><br>";
			echo "<strong>La date saisie <font color='red'>n'est pas valide</font></strong>";
		}
		
	}
	



 ?>