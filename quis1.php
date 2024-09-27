<html>
<head>
    <title>Quiz 1</title>
</head>
<body>
    <h1>FORM INPUT PERHITUNGAN GAJI</h1>
    <form action="quis1.php"method="POST">
        Nip: <input type="text" name="nip"><br>
        Nama Pegawai: <input type="text" name="nama_pegawai"><br>
        Jabatan: <input type="text" name="jabatan"><br>
        Gaji Pokok: <input type="number" name="gaji_pokok"><br>
        Jumlah Anak: <input type="number" name="jumlah_anak"><br>
        Potongan: <input type="number" name="potongan"><br>
        <input type="submit" name="hitung" value="Hitung">
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