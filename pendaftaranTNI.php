<?php
function t_b($bb,$tb){
    if ($bb<=60 && $bb >= 50 && $tb>165) {
        return "Selamat Anda DiTerima";
    }else {
        return "Kembali Latihan Pantang Menyerah";        
    }
}
?>
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
    <legend>Pendaftaran TNI</legend>
    <form action="" method="get">
    <table>
    <tr>
    <td><label for="">Nama</label></td>
    <td><input type="text" name="nama"  id="" required></td>
    </tr>
    <tr>
    <td><label for="">Berat Badan</label></td>
    <td><input type="number" name="berat_badan" min="1" id="" required></td>
    </tr>
    <tr>
    <td><label for="">Tinggi Badan</label></td>
    <td><input type="number" name="tinggi_badan" min="1" id="" required></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="kirim" value="kirim"></td>
    </tr>
    </table>
    </form>
    </fieldset>
    <?php
    if (isset($_GET['kirim'])) {
        $nama = $_GET['nama'];
        $berat_badan = $_GET['berat_badan'];
        $tinggi_badan = $_GET['tinggi_badan'];
        ?>
        <table>
        <tr>
        <td>Nama</td>
        <td>: <?=$nama?></td>
        </tr>
        <tr>
        <td>Berat Badan</td>
        <td>: <?=$berat_badan?></td>
        </tr>
        <tr>
        <td>Tinggi Badan </td>
        <td>: <?=$tinggi_badan?></td>
        </tr>
        </table>
        <h2><?=t_b($berat_badan,$tinggi_badan)?></h2>
    <?php }
    ?>
</body>
</html>