<html lang="en">
<?php

include "kon.php";
?>
<head>
<title>CV. BV</title>
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
                                <?php  
                                        $sql_cek="SELECT depresiasi.id_depresiasi, mesin.hrg_perolehan, 
                                                    mesin.nilai_residu, mesin.taksiran_produksi,
						    detailmesin.satuan_hasil,
                                                    depresiasi.depresiasi_perunit, depresiasi.total_depresiasi 
                                                    FROM depresiasi JOIN mesin 
                                                    ON depresiasi.id_mesin = mesin.id_mesin
                                                    ORDER BY id_depresiasi ASC";
                                        $query_cek = $kon->query($sql_cek);
                                        $result_cek = $query_cek->num_rows;
                                        if($result_cek=='0'){
                                        echo "<center>Maaf Data Yang anda cari tidak ada <br> Silahkan Masukkan Data Terlebih Dahulu</center>";
                                         }
                                ?>
								<br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                              <center><h2><font color="black">LAPORAN DEPRESIASI</font></h2></center> 
							  <br/>
							  <br/>

                                  <center><table width="1000" border="3" height="150">
                                        <thead>
                                            <th><font color="black">Id Depresiasi</font></th>
                                            <th><font color="black">Harga Perolehan</font></th>
                                            <th><font color="black">Nilai Residu</font></th>
                                            <th><font color="black">Taksiran Produksi</font></th>
                                            <th><font color="black">Depresiasi Perunit</font></th>
                                            <th><font color="black">Total Depresiasi</font></th>
									</tr>
                                        </thead>
                                        <tbody>
										<?php
										while ($data = $query_cek->fetch_array()) {
										?>
                                            <tr>
                                                <td><?php echo "<font color='black'>".$data['id_depresiasi']."</font>"; ?></td>
                                                <td><?php echo "<font color='black'>".number_format($data['hrg_perolehan'],0,".",",")."</font>"; ?></td>
                                                <td><?php echo "<font color='black'>".number_format($data['nilai_residu'],0,".",",")."</font>"; ?></td>
                                                <td><?php echo "<font color='black'>".number_format($data['taksiran_produksi'],0,".",",")."</font>"; ?></td>
                                                <td><?php echo "<font color='black'>".number_format($data['depresiasi_perunit'],0,".",",")."</font>"; ?></td>
                                                <td><?php echo "<font color='black'>".number_format($data['total_depresiasi'],0,".",",")."</font>"; ?></td>
										 <?php 
                                         }
                                    ?>
                                        </tbody>
                                    </table>
									<br/>
									<br/>
									<a href="home.php" onClick='self.history()'>
									<input type="Submit" name="kembali" value="Kembali"></a>
									</center>
</body>
</html>
