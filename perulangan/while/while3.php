<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Php</title>
</head>
<body>
        <div align="center">
        <form action="" method="POST">
            <h2>" Kelipatan Lima While "</h2>
            <table>
                <tr>
                    <td>Masukkan Angka</td>
                    <td>:</td>
                    <td><input type="number" name="angka" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="PROSES" name="save"></td>
                </tr>
            </table>
        </form>
        </div>
</body>
</html>


    <?php

            if(isset($_POST['save'])){
                $angka = $_POST['angka'];
                
                echo "<hr>";
                
                $a = 5;

                while($a <= $angka){   // KONDISI

                    echo "<center>";
                    echo "<p>Kelipatan  : $a</p>";
                    echo "</center>";

                $a+=5; // INCREMENT
                
                }
            }

    ?>