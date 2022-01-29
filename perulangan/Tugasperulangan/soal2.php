<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
        <div align="center">
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Input Bilangan</td>
                    <td>:</td>
                    <td><input type="number" name="bil" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Save" name="simpan"></td>
                </tr>
            </table>
        </form>
        </div>
</body>
</html>
<br>

<?php

            if(isset($_POST['simpan'])){
            
            $bil = $_POST['bil'];
            
            echo "<center>";
            for($a = $bil; $a >= 1; $a--){          // KONDISINYA UNTUK VARIABEL AWAL SAMA DENGAN VARIABEL INPUTAN DAENGAN KONDISI AWAL
                for($b = 1; $b <= $a; $b++){         // -- DAN LEBIH KECIL DARI 1
                    echo "$b &nbsp ";
                }
                echo "<br>";
            }
            echo "</center>";
            }

        
?>


