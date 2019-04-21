<?php
$storageData = array();
if (($handle = fopen("CalculationStorage.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        array_push($storageData, $data);
    }
    fclose($handle);
}
$storageData = array_reverse($storageData, true);
?>
<!DOCTYPE html>
<html>
        <head>
			<meta charset="utf-8">
			<title>Calculations</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen">
			<link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
          <table class="table table-bordered">
            <tr>
              <th>Date</th>
              <th>Calculation</th>
              <th>IP Address</th>
              <th>Browser Info</th>
            </tr>
            <?php foreach ($storageData as $line) {?>
            <tr>
              <td><?= $line[1]?></td>
              <td><?= $line[0]?></td>
              <td><?= $line[2]?></td>
              <td><?= $line[3]?></td>
            </tr>
            <?php } ?>
          </table>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        </body>
</html>
