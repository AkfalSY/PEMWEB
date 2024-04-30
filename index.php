<?php
    $angka1 = @$_POST['angka1'];
    $angka2 = @$_POST['angka2'];
    $hasil = @$_POST['hasil'];

    if(isset($_POST['tambah'])){
        $hasil = $angka1 + $angka2;
    } 
    
    if(isset($_POST['kurang'])){
        $hasil = $angka1 - $angka2;
    } 
    
    if(isset($_POST['kali'])){
        $hasil = $angka1 * $angka2;
    } 

    if(isset($_POST['bagi'])){
        $hasil = $angka1 / $angka2;
    } 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
            <form method="post">
                <table>
                    <tr>
                        <td id="judul" colspan="3"><h2><b>KALKULATOR</b></h2></td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td>Angka 1</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="angka1" placeholder="Masukan Angka Pertama" value="<?=$angka1?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Angka 2</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="angka2" placeholder="Masukan Angka Kedua" value="<?=$angka2?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="tambah" value="+">
                            <input type="submit" name="kurang" value="-">
                            <input type="submit" name="kali" value="*">
                            <input type="submit" name="bagi" value="/">
                        </td>
                    </tr>
                    <tr>
                        <td>Hasil </td>
                        <td>:</td>
                        <td>
                            <input type="text" name="hasil" value="<?=$hasil?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                </table>
            </form>
    </body>

</html>