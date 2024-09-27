<html>
<head>
	<title>Form Input Data Transaksi</title>
</head>
<body bgcolor="yellow">
	<form method="POST"action="uas.php">
		<table width="400"bordercolor="white"bgcolor="green">
			<tr><td colspan="3"><div align="center">
				FORM INPUT DATA TRANSAKSI</div></td></tr>
				<form action="uas.php"method="POST">
				<tr><td width="130">No Transaksi</td>
					<td width="10">:</td>
					<td width="200"><input type="text"name="no_transaksi"></td>
				</tr>
				<tr><td width="130">Kode Barang</td>
					<td width="10">:</td>
					<td width="200"><input type="text"name="kode_barang"></td>
				</tr>
				<tr><td width="130">Nama Barang</td>
					<td width="10">:</td>
					<td width="200"><input type="text"name="nama_barang"></td>
				</tr>
				<tr><td width="130">Harga Barang</td>
					<td width="10">:</td>
					<td width="200"><input type="text"name="harga_barang"></td>
				</tr>
				<tr>
					<td width="130">Satuan</td>
					<td width="10">:</td>
					<td width="200">
						<select name="satuan">
							<option value="">--Pilih Satuan Barang--</option>
							<option value="Pcs">Pcs</option>
							<option value="Pck">Pck</option>
							<option value="Lembar">Lembar</option>
							<option value="Kotak">Kotak</option>
						</select>
					</td>
				</tr>
				<tr><td width="130">Jumlah Barang</td>
					<td width="10">:</td>
					<td width="200"><input type="text"name="jumlah_barang"></td>
				</tr>
				<tr>
					<td width="130">Pembayaran</td>
					<td width="10">:</td>
					<td width="200">
						<label><input type="radio"name="Pembayaran"value="Cash">Cash</label>
						<label><input type="radio"name="Pembayaran"value="Kredit">Kredit</label>
					</td>
				</tr>

				<tr>
					<td colspan="3" align="center">
					<input type="submit"name="submit"value="SIMPAN">
					<input type="reset"name="reset"value="BATAL">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>