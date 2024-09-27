<html>
<head>
	<title>Penggunaan If lebih dari dua kondisi</title>
</head>
<body>
	<h2>
	<font face="algerian"color="blue">
	Demo Program dengan Fungsi If</h2></font>
<form action="ifmajemuk.php"method="POST">
Masukkan Bilangan Bulat :<br>
<input type="text"name="bilangan">
<input type="submit"value="CEK BILANGAN">
</form>
<?php
$bilangan=$_POST["bilangan"];
if($bilangan>0){
	$str="POSITIF";
}elseif($bilangan<0){
	$str="NEGATIF";
}else{
	$str="NOL";
}
echo "$bilangan adalah bilangan $str";
?>
</body>
</html>