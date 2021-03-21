<html>
<head>
<title>BUKU TAMU </title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
	<form action = Simpan.php method=get>
		<table width="75%" border="0" align="center" bgcolor="16D2FF">
			<tr bgcolor="white">
				<td height="21" colspan="3"><div align="center"><strong>BUKU TAMU
				</strong></div></td>
			</tr>
			<tr>
				<td height="100"><div align="center"><img src="logo_top.png" width="133" height="120"></div></td>
				<td>&nbsp;</td>
				<td><div align="center" class="style1">UNIVERSITAS SAINS &amp; TEKNOLOGI KOMPUTER </div></td>
			</tr>
			<tr>
			  <td width="22%" height="54"><div align="right">Nama</div></td>
				<td width="2%">:</td>
			  <td width="76%"><input name=nama type=Text size="30"></td>
			</tr>
			<tr>
				<td heigh="40" valign="top"><div align="right">Jenis
				kelamin</div></td>
				<td valign="top">:</td>
				<td><input type=RADIO value="P" checked name="sex">
					Wanita<br>
					<input type=RADIO value="L" name="sex">
				Pria</td>
			</tr>
			<tr>
				<td height="21"><div align="right">E-mail</div></td>
				<td>:</td>
				<td><input name=email type=TEXT size="30"></td>
			</tr>
			<tr>
				<td height="88" vlign="top"><div align="right">Minat
			  </div></td>
				<td valign="top"><p>&nbsp;</p>
			    <p>:</p></td>
<td> 
<input type= checkbox name=minat1 >Bonsai<br>
<input type= checkbox name=minat2 >Tanaman Hias <br>
<input type= checkbox name=minat3 >Musik Jazz <br>
<input type= checkbox name=minat4 >Pemrogaman </td>
		  </tr>
				<tr>
					<td height="21" valign="top"><div align="right">Komentar
					</div></td>
					<td valign="top">:</td>
					<td><TEXTAREA ROWS=4 COLS=40 NAME=komentar>
					</TEXTAREA></td>
				</tr>
				<tr>
					<td height="80" colspan="3" vlign="top">
					  <div align="center">
					    <input type=SUBMIT value="Simpan">
				      </div></td></tr>
				<tr bgcolor="white">
					<td height="21" colspan="3" valign="top">&nbsp;</td>
				</tr>
			</table>
			<P>
</form>
</body>
</html>