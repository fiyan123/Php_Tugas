<?php
        $inputbayar = $_POST['inputbayar'];
        $hargaakhir = $_POST['hargaakhir'];
    
    echo "<br>";
    echo "<center>";
    echo "<h2><u>* PROSES PEMBAYARAN *</u></h2>";
        echo "<table>";
        echo "<tr>";
        echo "<td>Total Harga Akhir</td> <td>:</td> <td>Rp.$hargaakhir</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Pembayaran</td> <td>:</td> <td>Rp.$inputbayar</td>";
        echo "</tr>";

        $kembalian = $inputbayar - $hargaakhir;
        echo "<tr>";
        echo "<td><b>Kembalian</b></td> <td>:</td> <td>Rp.$kembalian</td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
        echo "<a href='lat.php'>Back To Menu</a>";
    echo "</center>";
?>