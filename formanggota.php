<html>
<head>
	<title>form Input Data Anggota</title>
</head>
<body bgcolor="yellow">
	<form method="post"action="formanggota.php">
		<table width="400"bordercolor="white"bgcolor="green">
			<tr><td colspan="3"><div align="center">
				FORM INPUT DATA ANGGOTA</div></td></tr>
				<tr><td width="130">Kode Anggota</td>
					<td width="10">:</td>
					<td width="200"><input type="text"name="kode_anggota"></td>
				</tr>
				<tr><td width="130">Nama Anggota</td>
					<td width="10">:</td>
					<td width="200"><input type="text"name="nama_anggota"></td>
				</tr>
				<tr><td width="130">Alamat</td>
					<td width="10">:</td>
					<td><textarea name="alamat"></textarea></td>
				</tr>
				<tr><td width="130">No Hp</td>
					<td width="10">:</td>
					<td width="200"><input type="text"name="no_hp"></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
					<input type="submit"name="submit"value="KIRIM DATA">
					<input type="reset"name="reset"value="RESET DATA">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>