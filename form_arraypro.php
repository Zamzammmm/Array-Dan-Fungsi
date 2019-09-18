<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['Login'])) {
        if (isset($_POST['ok'])) {
        $bilangan = $_POST['bil'];
        $pangkat = $_POST['pan'];
        
        for ($i=0; $i < count($bilangan); $i++) { 
                echo "$bilangan[$i] pangkat $pangkat[$i]<br>";
            for ($j=1; $j <= $pangkat[$i] ; $j++) {  
                echo $bilangan[$i];
                if ($j < $pangkat[$i]) {
                    echo " x ";
                }
            }
            $hasil = pow($bilangan[$i], $pangkat[$i]);
            echo " = ".$hasil." termasuk ";
            if ($hasil % 2 == 1) {
                echo "Bilangan Ganjil";
            } else {
                echo "Bilangan Genap";
            }
            echo "<hr>";
        }
        echo "<a href='form_array.php'>Kembali</a>";
    }
    } else {
        die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
     Silahkan login <a href='form_arrayin.php'>Disini</a>");}
?>
</body>
</html>