
<!DOCTYPE html>
<html>
<head>
	<title>Exercice 3</title>
</head>
<body>
	<form method="post" action="test.php">

	<h1>Choisir une date</h1>
		<ul style="list-style-type: none;">
			<li><strong>Jour</strong></li>
			<li><select name="day">>
				<?php
    for ($i=1; $i<=31; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"> <?php echo $i;?></option>
        <?php
    }
	?></select>
			</li>
		</ul>

		<ul style="list-style-type: none;">
			<li>Mois</li>
			<li>
				<li><select name="month">
				<?php
    for ($i=1; $i<=12; $i++)
    {
        ?>
            <option value="<?php echo $i;?>" ><?php echo $i;?></option>
        <?php
    }
	?></select>
			</li>
		</ul>

		<ul style="list-style-type: none;">
			<li><strong>Année</strong></li>
			<li><select name="year">
				<?php
    for ($i=1900; $i<=2050; $i++)
    {
        ?>
            <option value="<?php echo $i;?>" ><?php echo $i;?></option>
        <?php
    }
	?></select>
			</li>
		</ul>

		<button name="submit">Valider</button>
	
	</form>
</body>
</html>