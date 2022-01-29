<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1 </title>
</head>
<body>
        <br>
        <br>
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
</body>
</html>

<?php

            if(isset($_POST['simpan'])){
            

                $bil = $_POST['bil'];
                $i=1;
                while ($i <= $bil)
                {
                    $a=1;
                    while ($a <= $i)
                    {
                        echo  " &nbsp; $a";
                        $a++;
                    }
                    $i++;
                    echo "<br>";
                }
        }
?>