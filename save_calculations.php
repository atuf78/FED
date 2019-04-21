<?php
if($_GET['sum'] == 'undefined'){
	header("Location: index.php?error=Not A Valid Calculation, Please Save After Pressing Equals");
} else {
	$date = date("D M d, Y G:i");
	$date = str_replace(',', '', $date); 
	$clientIP = $_SERVER['REMOTE_ADDR'];
	$browserInfo  = $_SERVER['HTTP_USER_AGENT'];
	$browserInfo = str_replace(',', '', $browserInfo);
	$entry = $_GET['sum'].', '.$date.', '.$clientIP.', '.$browserInfo." \n";
	$file = fopen("CalculationStorage.csv", "a");
	fwrite($file, $entry);
	fclose($file);
	header("Location: index.php?success=Calcuation Saved!");
}
?>