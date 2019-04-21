<?php
if(isset($_GET['error'])){
	$errorMsg = $_GET['error'];
	echo "<script type='text/javascript'>alert('$errorMsg');</script>";
}
if(isset($_GET['success'])){
	$successMsg = $_GET['success'];
	echo "<script type='text/javascript'>alert('$successMsg');</script>";
}
?>
<!doctype html>
<html lang="en">
        <header>
			<title>FED Text</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen">
			<link rel="stylesheet" type="text/css" href="style.css">
        </header>

        <body>
			<div class="container-fluid">
			<div class="row calculation calculation-header">
					<div class="col-md-12 calc_number">
						<p id="header"></p>
					</div>
				</div>
				<div class="row calculation">
					<div class="col-md-12 calc_number" id="test">0</div>
				</div>
				<div class="row calc-buttons">
					<button class="col-md-5 calc-button-red" onclick="ac();">AC</button>
					<button class="col-md-4 calc-button-red" onclick="document.location.href='saveCalculation.php?sum='+encodeURIComponent(headerSum)">SAVE</button>
					<button class="col-md-3 calc-button-orange" onclick="append('/');">/</button>
				</div>
				<div class="row calc-buttons">
					<button class="col-md-3 calc-button-pink" onclick="append('.');">.</button>
					<button class="col-md-3 calc-button-pink" onclick="append(0);">0</button>
					<button class="col-md-3 calc-button-pink" id="button-empty">#</button>
					<button class="col-md-3 calc-button-orange" onclick="append('*');">x</button>
				</div>
				<div class="row calc-buttons">
					<button class="col-md-3 calc-button-pink" onclick="append(1);">1</button>
					<button class="col-md-3 calc-button-pink" onclick="append(2);">2</button>
					<button class="col-md-3 calc-button-pink" onclick="append(3);">3</button>
					<button class="col-md-3 calc-button-orange" onclick="append('-');">-</button>
				</div>
				<div class="row calc-buttons">
				<button class="col-md-3 calc-button-pink" onclick="append(4);">4</button>
				<button class="col-md-3 calc-button-pink" onclick="append(5);">5</button>
				<button class="col-md-3 calc-button-pink" onclick="append(6);">6</button>
				<button class="col-md-3 calc-button-orange" onclick="append('+');">+</button>
				</div>
				<div class="row calc-buttons">
				<button class="col-md-3 calc-button-pink" onclick="append(7);">7</button>
				<button class="col-md-3 calc-button-pink" onclick="append(8);">8</button>
				<button class="col-md-3 calc-button-pink" onclick="append(9);">9</button>
				<button class="col-md-3 calc-button-orange" onclick="append('=');">=</button>
				</div>
			</div>
			<script src="calcControl.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


		</body>

</html>
