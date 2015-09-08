<?php

	$ar = fopen("archivos/miArchivo.txt", "r");

	while(!feof($ar))
	{
		echo fgets($ar), "<br/>";
	}
	fclose($ar);
	echo "<br/><br/>";
	echo "<a href='/clase3/index.php'>Inicio</a>";
?>