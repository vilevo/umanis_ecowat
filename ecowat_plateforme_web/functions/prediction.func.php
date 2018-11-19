<?php

if (isset($_POST['confirmer'])) {

 require"functions/input_secure.func.php";

 $annee = input_secure($_POST['annee']);

 $api_url = 'https://projet-hackathon-08.appspot.com/prediction/'.$annee;

 $prediction = file_get_contents($api_url);
 $prediction = json_decode($prediction, true);

if (!empty($prediction)) {
	 $consommation = $prediction['consomation'];
	 $consomation_rurale = $prediction['consomation_rurale'];
	 $consomation_urbaine = $prediction['consomation_urbaine'];
	 $pop_u = $prediction['pop_u'];
	 $pop_r = $prediction['pop_r'];
	 
}else{
	echo "Error";
}

header('Location:pages/prediction?conso_r='.$consomation_rurale.'&conso_u='.$consomation_urbaine.'&pop_u='.$pop_u.'&pop_r='.$pop_r.'&annee='.$annee);
}