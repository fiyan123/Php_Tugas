<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 3</title>
</head>
<body>
            <div align="">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Inputkan Bilangan</td>
                            <td>:</td>
                            <td><input type="number" name="bilangan" id=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="save" id="" value="Proses"></td>
                        </tr>
                    </table>
                </form>
            </div>
</body>
</html>
<br>


<?php

        if(isset($_POST['save'])){

            $bilangan = $_POST['bilangan'];
            
            for($i=$bilangan; $i>=1; $i--){         // START AWAL UNTUK VARIABEL NYA SAMA DENGAN VARIABEL INPUTAN DAN 
                                                    // KONDISINYA LEBIH BESAR DARI VARAIABEL 1
                for($j=$bilangan; $j>=$i; $j--){
                    echo "$j &nbsp;";
                }

                echo "<br>";
            }

        }


?>