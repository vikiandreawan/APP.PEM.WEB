<html>
<head>
<title>
	Isi buku tamu
</title>	
</head>
<body>
	
<?php
$no_data = 1;
$pegangan = fopen("BUKUTAMU.DAT", "r");
while (! feof($pegangan)) {
	
$nama = fgets($pegangan, 255);
if ($nama == false)	
	break;

$kelamin = trim(fgets($pegangan, 255));
$email = trim(fgets($pegangan, 255));
$kode_minat = trim(fgets($pegangan, 255));

$ket = "";
while (! feof($pegangan)) {
	
$tmp = trim(fgets($pegangan, 255));
if ($tmp == "*-*") 
	break;

$ket .=($tmp. "<br>\n");

}

$minat="";
for ($i=0; $i < 4; $i++) { 
	if (substr($kode_minat, $i,1)=="v")
		switch ($i) {
			case '0':
				$minat .= "Bonsai<br>";
				break;
			case '1':
				$minat .= "Tanaman hias<br>";
				break;		
			case '2':
				$minat .= "Musik Jazz<br>";
				break;		
			case '3':
				$minat .= "Pemrograman<br>";
				break;		
		}
}

//tampilkan
echo "<b> Data Tamu ke-$no_data : </b></br>";
echo "Nama : <b>$nama</b><br>";
if ($kelamin=="L")
	echo "Jenis kelamin : <b>Pria</b><br>";
else
	echo "Jenis kelamin : <b>Wanita</b><br>";
echo"E-mail :<b>$email</b></br>";

if (! empty($minat))
{
	echo "Minat : <br>";
	echo "<b>$minat</b>";
}
echo"Komentar : <i>$ket</i>";
echo "<hr>";
$no_data++; // pencacah nomer urut data
}

?>
</body>
</html>