<html>
<head>
	<title>Penggunaan If dua kondisi</title>
</head>
<body>
	<h2>
	<font face="algerian"color="blue">
	Demo Program dengan Fungsi If</h2></font>
<form action="if.php"method="POST">
Masukkan Bilangan Bulat :<br>
<input type="text"name="bilangan">
<input type="submit"value="CEK BILANGAN">
</form>
<?php
$bilangan=$_POST["bilangan"];
if($bilangan%2==0){
	$str="GENAP";
}else{
	$str="GANJIL";
}
echo "$bilangan adalah bilangan $str";
?>
</body>
</html>