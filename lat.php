<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Awal</title>
</head>
<body>
        <fieldset>
        <center>
        <h2>* PILIHAN DESTINASI *</h2>
        <table>
            <tr>
                <td>1. Bukit Bintang</td>
                <td>Rp.</td>
                <td>10.000</td>
            </tr>
            <tr>
                <td>2. Pantai Sandraman</td>
                <td>Rp.</td>
                <td>15.000</td>
            </tr>
            <tr>
                <td>3. Candi Borobudur</td>
                <td>Rp.</td>
                <td>50.000</td>
            </tr>
            <tr>
                <td>4. Candi Prambanan</td>
                <td>Rp.</td>
                <td>50.000</td>
            </tr>
            <tr>
                <td>5. Keraton Yogyakarta</td>
                <td>Rp.</td>
                <td>5.000</td>
            </tr>
            <tr>
                <td>6. Malioboro Yogyakarta</td>
                <td>Rp.</td>
                <td>5.000</td>
            </tr>
            <tr>
                <td>7. Cafe Pendopo Lawas</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8. Goa Pindul</td>
                <td>Rp.</td>
                <td>100.000</td>
            </tr>
        </table>
        <br>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Masukkan Tempat</td>
                    <td>:</td>
                    <td><input type="teks" name="masukkan"></td>
                </tr>
                <tr>
                    <td>Tiket</td>
                    <td>:</td>
                    <td><input type="number" name="tiket"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="SAVE" name="simpan"></td>
                </tr>
            </table>
        </form>
        </fieldset>
        </center>
</body>
</html>

<?php
       if(isset($_POST['simpan'])){
           $masukkan = $_POST['masukkan'];
           $tiket    = $_POST['tiket'];
           $diskon;

            if($masukkan == 1){
                $bukit = 10000;
                echo "<center>";
                echo "<h2>* Bukit Bintang *</h2>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>Pilihan Dipilih</td> <td>:</td> <td>Bukit Bintang</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Harga Tiket</td> <td>:</td> <td>Rp.$bukit</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Tiket Dibeli</td> <td>:</td> <td>Untuk $tiket Orang</td>";
                    echo "</tr>";

                    // PROSES HARGA BELI TIKET
                    $totalHarga = $tiket * $bukit;

                    echo "<tr>";
                    echo "<td>Harga Total Tiket</td> <td>:</td> <td>Rp.$totalHarga</td>";
                    echo "</tr>";

                        // PROSES DISKON
                        if($tiket >= 5){
                            $diskon = (20/100) * $totalHarga;
                        }
                        elseif($tiket >= 10){
                            $diskon = (50/100) * $totalHarga;
                        }
                        elseif($tiket >= 15){
                            $diskon = (75/100) * $totalHarga;
                        }
                        else {
                            $diskon = 0;
                        }
                    echo "<tr>";
                    echo "<td>Diskon</td> <td>:</td> <td>Rp.$diskon</td>";
                    echo "</tr>";
                    echo "</table>";

                    // PROSES BAYAR
                    $hargaakhir = $totalHarga - $diskon;
                    
                    echo "<p>Total Bayar : Rp.$hargaakhir</p>";
                    echo "<form action='pembayaran.php' method='post'>";
                    echo "<label for='bayar'>Bayar : </label>";
                    echo "<input type='number' name='inputbayar' id='inputbayar'>";
                    echo "<input type='hidden' name='hargaakhir' value='$hargaakhir'>";
                    echo "<button type='submit' name='bayar'>Bayar</button>";
                    echo "</form>";
                echo "</center>";
                echo "<hr>";
            }
            elseif($masukkan == 2){

                $pantai = 15000;
                echo "<center>";
                echo "<h2>* Pantai Sandraman *</h2>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>Pilihan Dipilih</td> <td>:</td> <td>Pantai Sandraman</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Harga Tiket</td> <td>:</td> <td>Rp.$pantai</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Tiket Dibeli</td> <td>:</td> <td>Untuk $tiket Orang</td>";
                    echo "</tr>";

                    // PROSES HARGA BELI TIKET
                    $totalHarga = $tiket * $pantai;

                    echo "<tr>";
                    echo "<td>Harga Total Tiket</td> <td>:</td> <td>Rp.$totalHarga</td>";
                    echo "</tr>";

                        // PROSES DISKON
                        if($tiket >= 4){
                            $diskon = (15/100) * $totalHarga;
                        }
                        elseif($tiket >= 10){
                            $diskon = (35/100) * $totalHarga;
                        }
                        elseif($tiket >= 15){
                            $diskon = (75/100) * $totalHarga;
                        }
                        else {
                            $diskon = 0;
                        }
                    echo "<tr>";
                    echo "<td>Diskon</td> <td>:</td> <td>Rp.$diskon</td>";
                    echo "</tr>";
                    echo "</table>";

                    // PROSES BAYAR
                    $hargaakhir = $totalHarga - $diskon;
                    
                    echo "<p>Total Bayar : Rp.$hargaakhir</p>";
                    echo "<form action='pembayaran.php' method='post'>";
                    echo "<label for='bayar'>Bayar : </label>";
                    echo "<input type='number' name='inputbayar' id='inputbayar'>";
                    echo "<input type='hidden' name='hargaakhir' value='$hargaakhir'>";
                    echo "<button type='submit' name='bayar'>Bayar</button>";
                    echo "</form>";
                echo "</center>";
            }

            elseif ($masukkan == 3) {

                $borobudur = 50000;
                echo "<center>";
                echo "<h2>* Candi Borobudur *</h2>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>Pilihan Dipilih</td> <td>:</td> <td>Candi Borobudur</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Harga Tiket</td> <td>:</td> <td>Rp.$borobudur</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Tiket Dibeli</td> <td>:</td> <td>Untuk $tiket Orang</td>";
                    echo "</tr>";

                    // PROSES HARGA BELI TIKET
                    $totalHarga = $tiket * $borobudur;

                    echo "<tr>";
                    echo "<td>Harga Total Tiket</td> <td>:</td> <td>Rp.$totalHarga</td>";
                    echo "</tr>";

                        // PROSES DISKON
                        if($tiket >= 5){
                            $diskon = (10/100) * $totalHarga;
                        }
                        elseif($tiket >= 10){
                            $diskon = (30/100) * $totalHarga;
                        }
                        elseif($tiket >= 20){
                            $diskon = (75/100) * $totalHarga;
                        }
                        else {
                            $diskon = 0;
                        }
                    echo "<tr>";
                    echo "<td>Diskon</td> <td>:</td> <td>Rp.$diskon</td>";
                    echo "</tr>";
                    echo "</table>";

                    // PROSES BAYAR
                    $hargaakhir = $totalHarga - $diskon;
                    
                    echo "<p>Total Bayar : Rp.$hargaakhir</p>";
                    echo "<form action='pembayaran.php' method='post'>";
                    echo "<label for='bayar'>Bayar : </label>";
                    echo "<input type='number' name='inputbayar' id='inputbayar'>";
                    echo "<input type='hidden' name='hargaakhir' value='$hargaakhir'>";
                    echo "<button type='submit' name='bayar'>Bayar</button>";
                    echo "</form>";
                    echo "</center>";
            }

            elseif ($masukkan == 4) {
                $prambanan = 50000;
                echo "<center>";
                echo "<h2>* Candi Prambanan *</h2>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>Pilihan Dipilih</td> <td>:</td> <td>Candi Borobudur</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Harga Tiket</td> <td>:</td> <td>Rp.$prambanan</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Tiket Dibeli</td> <td>:</td> <td>Untuk $tiket Orang</td>";
                    echo "</tr>";

                    // PROSES HARGA BELI TIKET
                    $totalHarga = $tiket * $prambanan;

                    echo "<tr>";
                    echo "<td>Harga Total Tiket</td> <td>:</td> <td>Rp.$totalHarga</td>";
                    echo "</tr>";

                        // PROSES DISKON
                        if($tiket >= 10){
                            $diskon = (10/100) * $totalHarga;
                        }
                        elseif($tiket >= 15){
                            $diskon = (35/100) * $totalHarga;
                        }
                        elseif($tiket >= 20){
                            $diskon = (40/100) * $totalHarga;
                        }
                        else {
                            $diskon = 0;
                        }
                    echo "<tr>";
                    echo "<td>Diskon</td> <td>:</td> <td>Rp.$diskon</td>";
                    echo "</tr>";
                    echo "</table>";

                    // PROSES BAYAR
                    $hargaakhir = $totalHarga - $diskon;
                    
                    echo "<p>Total Bayar : Rp.$hargaakhir</p>";
                    echo "<form action='pembayaran.php' method='post'>";
                    echo "<label for='bayar'>Bayar : </label>";
                    echo "<input type='number' name='inputbayar' id='inputbayar'>";
                    echo "<input type='hidden' name='hargaakhir' value='$hargaakhir'>";
                    echo "<button type='submit' name='bayar'>Bayar</button>";
                    echo "</form>";
                    echo "</center>";
            }

            elseif ($masukkan == 5) {
                $keraton = 5000;
                echo "<center>";
                echo "<h2>* Keraton Yogyakarta *</h2>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>Pilihan Dipilih</td> <td>:</td> <td>Keraton Yogyakarta</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Harga Tiket</td> <td>:</td> <td>Rp.$keraton</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Tiket Dibeli</td> <td>:</td> <td>Untuk $tiket Orang</td>";
                    echo "</tr>";

                    // PROSES HARGA BELI TIKET
                    $totalHarga = $tiket * $keraton;

                    echo "<tr>";
                    echo "<td>Harga Total Tiket</td> <td>:</td> <td>Rp.$totalHarga</td>";
                    echo "</tr>";

                        // PROSES DISKON
                        if($tiket >= 10){
                            $diskon = (20/100) * $totalHarga;
                        }
                        elseif($tiket >= 15){
                            $diskon = (25/100) * $totalHarga;
                        }
                        elseif($tiket >= 20){
                            $diskon = (30/100) * $totalHarga;
                        }
                        else {
                            $diskon = 0;
                        }
                    echo "<tr>";
                    echo "<td>Diskon</td> <td>:</td> <td>Rp.$diskon</td>";
                    echo "</tr>";
                    echo "</table>";

                    // PROSES BAYAR
                    $hargaakhir = $totalHarga - $diskon;
                    
                    echo "<p>Total Bayar : Rp.$hargaakhir</p>";
                    echo "<form action='pembayaran.php' method='post'>";
                    echo "<label for='bayar'>Bayar : </label>";
                    echo "<input type='number' name='inputbayar' id='inputbayar'>";
                    echo "<input type='hidden' name='hargaakhir' value='$hargaakhir'>";
                    echo "<button type='submit' name='bayar'>Bayar</button>";
                    echo "</form>";
                    echo "</center>";
            }

            elseif ($masukkan == 6) {

                $malioboro = 5000;
                echo "<center>";
                echo "<h2>* Malioboro Yogyakarta *</h2>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>Pilihan Dipilih</td> <td>:</td> <td>Malioboro Yogyakarta</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Harga Tiket</td> <td>:</td> <td>Rp.$malioboro</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Tiket Dibeli</td> <td>:</td> <td>Untuk $tiket Orang</td>";
                    echo "</tr>";

                    // PROSES HARGA BELI TIKET
                    $totalHarga = $tiket * $malioboro;

                    echo "<tr>";
                    echo "<td>Harga Total Tiket</td> <td>:</td> <td>Rp.$totalHarga</td>";
                    echo "</tr>";

                        // PROSES DISKON
                        if($tiket >= 5){
                            $diskon = (10/100) * $totalHarga;
                        }
                        elseif($tiket >= 15){
                            $diskon = (20/100) * $totalHarga;
                        }
                        elseif($tiket >= 20){
                            $diskon = (25/100) * $totalHarga;
                        }
                        else {
                            $diskon = 0;
                        }
                    echo "<tr>";
                    echo "<td>Diskon</td> <td>:</td> <td>Rp.$diskon</td>";
                    echo "</tr>";
                    echo "</table>";

                    // PROSES BAYAR
                    $hargaakhir = $totalHarga - $diskon;
                    
                    echo "<p>Total Bayar : Rp.$hargaakhir</p>";
                    echo "<form action='pembayaran.php' method='post'>";
                    echo "<label for='bayar'>Bayar : </label>";
                    echo "<input type='number' name='inputbayar' id='inputbayar'>";
                    echo "<input type='hidden' name='hargaakhir' value='$hargaakhir'>";
                    echo "<button type='submit' name='bayar'>Bayar</button>";
                    echo "</form>";
                    echo "</center>";
            }

            elseif ($masukkan == 7) {
            echo "<center>";
                echo "<h2>* Pendopo Lawas *</h2>";
                echo "<form action='cafe.php' method='post'>";
                echo "<label for='pesan'>KLIK UNTUK PESAN MENU</label>";
                echo "<br>";
                echo "<br>";
                echo "<button type='submit' name='pesan'>Pesan</button>";
                echo "</form>";
            echo "</center>";

            }

            elseif($masukkan == 8){
                $goa = 15000;
                echo "<center>";
                echo "<h2>* Goa Pindul *</h2>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<td>Pilihan Dipilih</td> <td>:</td> <td>Goa Pindul</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Harga Tiket</td> <td>:</td> <td>Rp.$goa</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Tiket Dibeli</td> <td>:</td> <td>Untuk $tiket Orang</td>";
                    echo "</tr>";

                    // PROSES HARGA BELI TIKET
                    $totalHarga = $tiket * $goa;

                    echo "<tr>";
                    echo "<td>Harga Total Tiket</td> <td>:</td> <td>Rp.$totalHarga</td>";
                    echo "</tr>";

                        // PROSES DISKON
                        if($tiket >= 5){
                            $diskon = (5/100) * $totalHarga;
                        }
                        elseif($tiket >= 15){
                            $diskon = (10/100) * $totalHarga;
                        }
                        elseif($tiket >= 20){
                            $diskon = (20/100) * $totalHarga;
                        }
                        else {
                            $diskon = 0;
                        }
                    echo "<tr>";
                    echo "<td>Diskon</td> <td>:</td> <td>Rp.$diskon</td>";
                    echo "</tr>";
                    echo "</table>";

                    // PROSES BAYAR
                    $hargaakhir = $totalHarga - $diskon;
                    
                    echo "<p>Total Bayar : Rp.$hargaakhir</p>";
                    echo "<form action='pembayaran.php' method='post'>";
                    echo "<label for='bayar'>Bayar : </label>";
                    echo "<input type='number' name='inputbayar' id='inputbayar'>";
                    echo "<input type='hidden' name='hargaakhir' value='$hargaakhir'>";
                    echo "<button type='submit' name='bayar'>Bayar</button>";
                    echo "</form>";
                    echo "</center>";
            }
       }
   
?>