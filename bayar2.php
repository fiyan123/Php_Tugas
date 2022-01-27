<?php

    $inputbayar = $_POST['inputbayar'];
    $total      = $_POST['total'];
    $sisa       = $inputbayar - $total;

    echo "
    <div align='center'>
    <h2>* PEMBAYARAN *</h2>
        <table>
            <tr>
                <td>Uang Pembayaran</td> <td>:</td> <td>Rp.$inputbayar</td>
            </tr>

            <tr>
               <td>Harga Total</td> <td>:</td> <td>Rp.$total<br></td>
            </tr>
            <tr>
               <td><b>Kembalian Anda</b></td> <td>:</td> <td>Rp.$sisa</td>
            </tr>
        </table>

        <br>
        <a href='cafe.php'>Back To Cafe</a>
        </div>
    ";
?>