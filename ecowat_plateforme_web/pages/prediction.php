<?php
require"../class/index.class.php";
require"../functions/input_secure.func.php";

if (isset($_GET['conso_u']) && isset($_GET['conso_r']) && isset($_GET['pop_u']) && isset($_GET['pop_r'])) {
	$conso_u = input_secure($_GET['conso_u']);
	$conso_r = input_secure($_GET['conso_r']);
	$pop_u = input_secure($_GET['pop_u']);
	$pop_r = input_secure($_GET['pop_r']);
	$annee = input_secure($_GET['annee']);
	$p = new Index();
}

require $p->View('prediction');
