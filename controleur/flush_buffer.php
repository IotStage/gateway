<?php
	require_once("ControllerClass.php");

        //inserer dans la base de donnees locale
        $controller = new Controller();
        $bdd_local = $controller->connecteToDataBaseLampadaire();
		$controller->flushBuffer($bdd_local, "lampadaire");


		$bdd_meteo = $controller->connecteToDataBaseMeteo();
        $controller->flushBuffer($bdd_meteo, "meteo");
?>
