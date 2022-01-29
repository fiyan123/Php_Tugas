<?php

    $inputpesan = $_POST['inputpesan'];
    $total      = $inputpesan * 10000;

    echo "
    <center>
        <h2>* Struk Pembayaran *</h2>
        <table>
            <tr>
                <td>Menu yang Di Pesan</td> <td>:</td> <td>$inputpesan</td>
            </tr>
            <tr>
               <td>Harga Total</td> <td>:</td> <td>$total</td>
            </tr>
        </table>

        <br>
        <form action='bayar2.php' method='post'>
        <label for='bayar'>Bayar : </label>
        <input type='number' name='inputbayar' id='inputbayar'>
        <input type='hidden' name='total' value='$total'>
        <button type='submit' name='bayar'value='bayar'>Bayar</button>
        </form>
    </center>
    ";
?>