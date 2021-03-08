<html>
<head>
<title>Pemakaian Operator Aritmatika dalam PHP</title>
</head>

<body>
<form name="form1" method="post"  action="OpAritmatika.php">
<div class="kalkulator">
	<h2 align="center" class="judul style1 style1">Ayo Belajar Berhitung</h2>
	
	<td>
		<div align="center">
			<p>
			  <input type="text" name="operand1" placeholder="Masukkan Bilangan Pertama">
		  </p>
		</div>
	</td>
<th bgcolor="#FF0000">
	<div align="center">
		<p align="center">
		  <select name="operator">
		    <option>+</option>
		    <option>-</option>
		    <option>%</option>
		    <option>*</option>
		    <option>/</option>
		  </select>
		</p>
	  </div></th>
<td>
		<div align="center">
		  <p>
		    <input type="text" name="operand2" placeholder="Masukkan Bilangan Kedua">
		  </p>
	    </div>
  </td>
	<td>
		<div align="center">
			<input type="submit" name="hitung" value="Hitung" class="tombol">
		</div>
	</td>

</div>
</form>
</body>
</html>


 