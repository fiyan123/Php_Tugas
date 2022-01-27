<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
                <fieldset>
                    <div align="center">
                    <h2><u>* Selamat Datang Di Cafe Pendopo Lawas *</u></h2>
                    <b>~~~ Silahkan Pilih Menu-menu Berikut ~~~</b>
                    <br>
                
                    <form action="" method="post">
                        <br>
                        <table cellpadding="2">
                            <tr>
                                <th>No</th>
                                <th>Makanan</th>
                                <th>Minuman</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Mie Ayam</td>
                                <td>Cappucino</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Mie Goreng</td>
                                <td>Green Tea</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Mie Baso</td>
                                <td>Teh Tarik</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Seblak</td>
                                <td>Susu Hangat</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Ayam Bakar</td>
                                <td>Esteh</td>
                            </tr>
                            <tr>
                                <td>Makanan :</td>
                                <td><input type="text" name="makanan" id=""></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Minuman :</td>
                                <td><input type="text" name="minuman" id=""></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="SEND" name="save"></td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                    </div>
                    </fieldset>   
    </body>    
    </html>

            <?php

                    if(isset($_POST['save'])){
                        $makanan = $_POST['makanan'];
                        $minuman = $_POST['minuman'];
                    
                    if($makanan == 1){

                        $mie = 10000;
                            echo "
                            <center>
                                <br>
                                <h3>* Makanan *</h3>
                                <table>
                                    <tr>
                                        <td>Menu Yang Dipilih</td> <td>:</td> <td>Mie Ayam</td>
                                    </tr>
                                    <tr>
                                         <td>Harga Menu</td> <td>:</td> <td>Rp.$mie</td>
                                    </tr>
                                 </table>
                                 <br>
                                 <form action='cafe2.php' method='post'>
                                 <label for='pesan'>Pesan : </label>
                                 <input type='number' name='inputpesan' id='inputpesan'>
                                 <button type='submit' name='pesan'>pesan</button>
                                 </form>
                                 <hr>
                            </center>
                            ";
                    } 

                    elseif($makanan == 2){

                        $migor = 10000;
                            echo "
                            <center>
                                <br>
                                <h3>* Makanan *</h3>
                                <table>
                                    <tr>
                                        <td>Menu Yang Dipilih</td> <td>:</td> <td>Mie Goreng</td>
                                    </tr>
                                    <tr>
                                         <td>Harga Menu</td> <td>:</td> <td>Rp.$migor</td>
                                    </tr>
                                 </table>
                                 <br>
                                 <form action='cafe2.php' method='post'>
                                 <label for='pesan'>Pesan : </label>
                                 <input type='number' name='inputpesan' id='inputpesan'>
                                 <button type='submit' name='pesan'>pesan</button>
                                 </form>
                                 <hr>
                            </center>
                            ";
                    }

                    elseif($makanan == 3){

                        $baso = 10000;
                        echo "
                        <center>
                            <br>
                            <h3>* Makanan *</h3>
                            <table>
                                <tr>
                                    <td>Menu Yang Dipilih</td> <td>:</td> <td>Mie Baso</td>
                                </tr>
                                <tr>
                                     <td>Harga Menu</td> <td>:</td> <td>Rp.$baso</td>
                                </tr>
                             </table>
                             <br>
                             <form action='cafe2.php' method='post'>
                             <label for='pesan'>Pesan : </label>
                             <input type='number' name='inputpesan' id='inputpesan'>
                             <button type='submit' name='pesan'>pesan</button>
                             </form>
                             <hr>
                        </center>
                        ";
                    }

                    elseif($makanan == 4){

                        $seblak = 10000;
                        echo "
                            <center>
                            <br>
                            <h3>* Makanan *</h3>
                            <table>
                                <tr>
                                    <td>Menu Yang Dipilih</td> <td>:</td> <td>Seblak Sehah</td>
                                </tr>
                                <tr>
                                     <td>Harga Menu</td> <td>:</td> <td>Rp.$seblak</td>
                                </tr>
                             </table>
                             <br>
                             <form action='cafe2.php' method='post'>
                             <label for='pesan'>Pesan : </label>
                             <input type='number' name='inputpesan' id='inputpesan'>
                             <button type='submit' name='pesan'>pesan</button>
                             </form>
                             <hr>
                             </center>
                        ";
                    }

                    elseif($makanan == 5){

                        $ayam = 10000;
                        echo "
                        <center>
                            <br>
                            <h3>* Makanan *</h3>
                            <table>
                                <tr>
                                    <td>Menu Yang Dipilih</td> <td>:</td> <td>Ayam Bakar</td>
                                </tr>
                                <tr>
                                     <td>Harga Menu</td> <td>:</td> <td>Rp.$ayam</td>
                                </tr>
                             </table>
                             <br>
                             <form action='cafe2.php' method='post'>
                             <label for='pesan'>Pesan : </label>
                             <input type='number' name='inputpesan' id='inputpesan'>
                             <button type='submit' name='pesan'>pesan</button>
                             </form>
                             <hr>
                        </center>
                        ";
                    }
                       
                    



                    if($minuman == 1){
                        $cappucino= 10000;
                        echo "
                        <center>
                            <br>
                            <h3>* Minuman *</h3>
                            <table>
                                <tr>
                                    <td>Menu Yang Dipilih</td> <td>:</td> <td>Cappucino</td>
                                </tr>
                                <tr>
                                     <td>Harga Menu</td> <td>:</td> <td>Rp.$cappucino</td>
                                </tr>
                             </table>
                             <br>
                             <form action='cafe2.php' method='post'>
                             <label for='pesan'>Pesan : </label>
                             <input type='number' name='inputpesan' id='inputpesan'>
                             <button type='submit' name='pesan'>pesan</button>
                             </form>
                             <hr>
                        </center>

                        ";
                    }

                    else {
                        echo "";
                    }
                }
            ?>