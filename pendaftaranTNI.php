<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran TNI</title>
</head>
<body>
    <fieldset>
        <legend>
            PENDAFTARAN TNI
        </legend>
        <form action="" method="get">
            <label for="">Nama</label>
            <input type="text" name="nama" required><br>
            <br>
            <label for="">Berat Badan</label>
            <input type="number" name="bb" min="1" required><br>
            <br>
            <label for="">Tinggi Badan</label>
            <input type="number" name="tb" min"20" required><br>
            <br>
            <br>
            <input type="submit" name="simpan" value="SIMPAN">
        </form>
    </fieldset>
    <br><br>
    <?php
        if (isset($_GET['simpan'])) {
            $nama = $_GET['nama'];
            $berat = $_GET['bb'];
            $tinggi = $_GET['tb'];
            function tni($bb, $tb){
                if ($bb < 60 || $tb > 165) {
                    return "Selamat anda DITERIMA";
                } else {
                    return "Kembali Latihan Pantang Menyerah TIDAK DITERIMA";
                }
            }
            echo "Nama : $nama<br>";
            echo "Berat Badan : $berat kg<br>";
            echo "Tinggi Badan : $tinggi cm<br>";
            $status = tni($bb, $tb);
            echo "Keterangan : $status";
        }
    ?>
</body>
</html>
