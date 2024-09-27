<html>
<head>
    <title>UTS</title>
</head>
<body>
    <h1>FORM INPUT DATA BARANG </h1>
<form action="8_uts.php"method="POST">
        Kode Barang     : <input type="text" name="kode_barang"><br>
        Nama Barang     : <input type="text" name="nama_barang"><br>
        <td width="120">Satuan :</td>
        <select name="satuan">
        <option value="Pilih Satuan">[Pilih Satuan]</option>
        <option value="Lusin">Lusin</option>
        <option value="Box">Box</option>
        <option value="Pack">Pack</option>
        </select><br>
        <br>
        <br>
        <br>
        <br>
        Harga Satuan    : <input type="number" name="harga_satuan"><br>
        Quantitas       : <input type="number" name="quantitas"><br>
        <input type="submit"value="HITUNG">
        <input type="submit"value="BATAL">
    </form>

    <?php
    if(isset($_POST['hitung'])) {
        $gaji_pokok = $_POST['gaji_pokok'];
        $jumlah_anak = $_POST['jumlah_anak'];
        $potongan = $_POST['potongan'];
        $subtotal = $gaji_pokok * $jumlah_anak / $potongan;

        $potongan = 0;
        if ($subtotal > 200000) {
            $potongan = $subtotal * 0.10;
        } elseif ($subtotal > 100000) {
            $potongan = $subtotal * 0.05;
        }

        $total_pembayaran = $subtotal - $potongan;

        echo "Nip: ",$Nip  . $_POST['nip'] . "<br>";
        
        echo "Total Pembayaran: Rp. " . $total_pembayaran;
    }
    ?>
</body>
</html>