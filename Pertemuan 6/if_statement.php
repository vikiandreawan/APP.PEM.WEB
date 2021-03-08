<h1>STATMENT IF</h1>
<?php

if (isset($_POST["cek"])) {

	$nilai = $_POST["nilai"];

	if ($nilai=="") {
		echo "<h1> Anda belum memasukkan nilai </h1>";
	}elseif (!is_numeric($nilai)) {
		echo "Anda belum menentukan nilai..";
	} else {
		if($nilai<=30) // statment pertama
			{ echo "<h3> Anda mendapat nilai huruf E </h3>";}
		elseif($nilai<=50) // statment kedua
			{ echo "<h3> Anda mendapat nilai huruf D </h3>";}
		elseif($nilai<=70) // statment ketiga
			{ echo "<h3> Anda mendapat nilai huruf C </h3>";}
		elseif($nilai<=85) // statment keempat
			{ echo "<h3> Anda mendapat nilai huruf AB </h3>";}
		else
			{ echo "<h3> Anda mendapat nilai huruf A </h3>";}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>STATMENT IF</title>
</head>
<body>

<form action="" method="post">
	<label for="nilai">Nilai</label>
	<input type="text" name="nilai">
	<button type="submit" name="cek">Cek</button>
</form>
</body>
</html>