<html>
<head>
	<title>Input Output Data dari Keyboard</title>
</head>
<body>
	<form action="perhitungan_aritmatika.php"method="post">
		<table>
			<caption>FORM INPUT PERHITUNGAN ARITMATIKA</caption>
			<tr>
				<td width="30%">Nilai A :</td>
				<td><input type="text"name=a></td>
			</tr>
			<tr>
				<td width="30%">Nilai B :</td>
				<td><input type="text"name=b></td>
			</tr>
			<tr>
				<td width="2"align="center">
				<input type="submit"value="HITUNG">
				</td>
			</tr>
		</table>
	</form>
	<?php
	$penjumlahan=$_POST['a']+$_POST['b'];
	$pengurangan=$_POST['a']-$_POST['b'];
	$perkalian=$_POST['a']*$_POST['b'];
	echo "<pre>";
	echo "<b>Hasil perhitungan</br><br>";
	echo "========================<br>";
	echo "Hasil Penjumlahan = ",$penjumlahan,"<br>";
	echo "Hasil Pengurangan = ",$pengurangan,"<br>";
	echo "Hasil perkalian   = ",$perkalian,"<br>";
	echo "</pre>";
?>
</body>
</html>