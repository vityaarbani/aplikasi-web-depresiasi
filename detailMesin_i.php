<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Produksi Mesin Kopi</title>
        <style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("aa.png");
				background-position: center;
				height: 600px;
			  	weight: 200px;
		</style>
    </head>
    <body>
        <form method="POST" action="detailMesin_k.php">
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
            <center><p><h3><font color="black">Masukan Hasil Produksi Mesin Kopi</font color></h3></p></center>
            </br>
            <table align="center">
                <tr>
                <center><font color="black">Taksiran Produksi: <select name="id_mesin"></font color>
											<?php
												include "kon.php";
												$sql = "select * from mesin";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['id_mesin']}'>{$r['taksiran_produksi']}</option>";
												}
											?>
                </tr>
                <tr></center>
                <center><font color="black">Jenis Mesin Kopi: <select name="id_jenis"></font color>
											<?php
												include "kon.php";
												$sql = "select * from jenis";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['id_jenis']}'>{$r['jenis_mesin']}</option>";
												}
											?>
            </select>
            </center>
                </tr>                
                <tr>
                <center><font color="black">Merk Mesin: <select name="id_merk"></font color>
											<?php
												include "kon.php";
												$sql = "select * from merk";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['id_merk']}'>{$r['merk_mesin']}</option>";
												}
											?>
                </tr></center>           
                <tr>
                <td colspan="2"><font color="black">Produksi Tahun ke</td><td>
                <input type="text" name="tahun" 
                placeholder="Produksi tahun ke">
                </font>
                </td>
                </tr>
                <tr>
                <td colspan="2"><font color="black">Jumlah Produksi</td><td>
                <input type="text" name="satuan_hasil" 
                placeholder="Jumlah Produksi">
                </font>
                </td>
                </tr>
                <tr>
                <td colspan="2"><center><button type="submit" value="simpan">SIMPAN</button></center>
                </td>
                <td colspan="2"><a href="home.php">
                <left><button type="submit" value="batal">BATAL</button></left></td></tr>
            </center></table>
        </form>
    </body>
</html>