 <h2 class="sub-header">Dashboard</h2>
<div class="col-md-4">
 <center><table align="center" class="table table-striped">
              <thead>
                <tr>
                  <th bgcolor="#CCCCCC"><center>Kategori Buku</center></th>
                  <th bgcolor="#CCCCCC"><center>Jumlah</center></th>
                  <th bgcolor="#CCCCCC"><center>Total Buku</center></th>
                </tr>
              </thead>
             
              <tbody>
              <?php
              $query 	= "SELECT COUNT(kategori_buku) AS fantasi FROM tb_buku WHERE kategori_buku='fantasi'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
              	<tr>
                	<td align="center">Fantasi</td>
                    <td align="center"><?php echo $data->fantasi ?></td>
                    <?php
              $query 	= "SELECT COUNT(kategori_buku) AS totalbuku FROM tb_buku";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
                    <td rowspan="8" align="center">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br><b><h1><?php echo $data->totalbuku ?></h1></b></td>
                </tr> 
                <?php }} ?>
               
               <?php
              $query 	= "SELECT COUNT(kategori_buku) AS aksi FROM tb_buku WHERE kategori_buku='aksi'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
              	<tr>
                	<td align="center">Aksi</td>
                    <td align="center"><?php echo $data->aksi ?></td>
                </tr> 
                <?php } ?>
                
               <?php
              $query 	= "SELECT COUNT(kategori_buku) AS edukasi FROM tb_buku WHERE kategori_buku='edukasi'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
              	<tr>
                	<td align="center">Edukasi</td>
                    <td align="center"><?php echo $data->edukasi ?></td>
                </tr> 
                <?php } ?>
               
               <?php
              $query 	= "SELECT COUNT(kategori_buku) AS fashion FROM tb_buku WHERE kategori_buku='fashion'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
              	<tr>
                	<td align="center">Fashion</td>
                    <td align="center"><?php echo $data->fashion ?></td>
                </tr> 
                <?php } ?>
                
                <?php
              $query 	= "SELECT COUNT(kategori_buku) AS lifestyle FROM tb_buku WHERE kategori_buku='lifestyle'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
              	<tr>
                	<td align="center">Lifestyle</td>
                    <td align="center"><?php echo $data->lifestyle ?></td>
                </tr> 
                <?php } ?>
               
               <?php
              $query 	= "SELECT COUNT(kategori_buku) AS romansa FROM tb_buku WHERE kategori_buku='romansa'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
              	<tr>
                	<td align="center">Romansa</td>
                    <td align="center"><?php echo $data->romansa ?></td>
                </tr> 
                <?php } ?>
                
               <?php
              $query 	= "SELECT COUNT(kategori_buku) AS thriller FROM tb_buku WHERE kategori_buku='thriller'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
              	<tr>
                	<td align="center">Thriller</td>
                    <td align="center"><?php echo $data->thriller ?></td>
                </tr> 
                <?php } ?>
               
               <?php
              $query 	= "SELECT COUNT(kategori_buku) AS tokoh FROM tb_buku WHERE kategori_buku='tokoh'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						
						?>
              	<tr>
                	<td align="center">Tokoh</td>
                    <td align="center"><?php echo $data->tokoh ?></td>
                </tr> 
                <?php } ?>
               
               
              </tbody>
              </table></center></div>
              

<div class="col-md-8">
	
          <div class="table-responsive">
            <table width="666" height="253" class="table table-striped">
              <thead>
                <tr>
                                    <th bgcolor="#CCCCCC" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Foto</th>
                  <th bgcolor="#CCCCCC" width="21" height="25">Data</th>
                
                </tr>
              </thead>
               <?php
					$query 	= "SELECT * FROM tb_kasir WHERE id_kasir = '$userlogin'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						@$no++;
						if(count ($sql)>0) {
						?>
              <tbody>
                <tr>
                                    <td width="135" rowspan="6"><img class="img-circle" width="190" height="190" src="assets/img/user/<?php echo $data->foto; ?>" width="130" height="200"></td>
                  <td width="114">Nama</td>
                  <td width="10">:</td>
                  <td width="270"><?php echo $data->nama_kasir; ?></td>
                  
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?php echo $data->alamat_kasir; ?></td>
                </tr>
                <tr>
                  <td>Telepon / HP</td>
                  <td>:</td>
                  <td><?php echo $data->telp_kasir; ?></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td><?php echo $data->status_kasir; ?></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><?php echo $data->username; ?></td>
                </tr>
                 <tr>
                  <td>Tipe Pengguna</td>
                  <td>:</td>
                  <td><?php echo $data->type_user; ?></td>
                </tr>
				
				<?php }} ?>
              </tbody>
            </table>
            
            <div class="box-footer">
				<a href="?page=ubah_kasir&id=<?php echo $login->id_kasir ?>" class="btn btn-success">Ubah</a>
			</div>
            
            </div>
          </div>
           </div>
          


