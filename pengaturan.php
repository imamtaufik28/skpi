<section class="content-header">
	<h1>
		Pengaturan
	</h1>
    <h1 align="Right">
		
	</h1>
	
</section>
<br><BR>
<?php

if ($login->type_user == "kasir"){
				 
?>
<section class="content">
	<div class="callout callout-danger">
		<h4>Maaf! <span class="glyphicon glyphicon-warning-sign"></span></h4>

		<p>Halaman ini hanya bisa diakses oleh ADMIN</p>
	</div>
</section>
<?php } ?>
<?php

if ($login->type_user == "admin"){
				 
?>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr bgcolor="#CCCCCC">
                  <th>No</th>
                  <th>Kasir</th>
                  <th>Username</th>
                  
                  <th>Hak Akses</th>
                  <th>Aksi</th>
                  
                   
                </tr>
              </thead>
              
              
              <?php
					$query 	= "SELECT * FROM tb_kasir WHERE status_akun = 'use'";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						@$no++;
						if(count ($sql)>0) {
						?>
              <tbody>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $data->nama_kasir; ?></td>
                  <td><?php echo $data->username; ?></td>
                  
                  <td><form action="?page=simpan_perubahan&id=<?php echo $data->id_kasir ?>" method="POST"><div class="col-md-6"> <select class="form-control" name="type_user">
							
                            <option value="<?php echo $data->type_user ?>"><?php echo $data->type_user ?></option>
							<?php if($data->type_user == "kasir" ){ ?>
                            <option value="admin">Admin</option>
							<?php } ?>
							<?php if($data->type_user == "admin" ){ ?>
                            <option value="kasir">Kasir</option>
                            <?php } ?>
                      </select></div>
                      	<button type="submit" name="submit" class="btn btn-success">Simpan &nbsp;&nbsp;<span class="glyphicon glyphicon-folder-open"></span></button>
                      </form></td>
                  
                  
                  
                  <td>
                  
                                
  <a class="btn btn-danger" href="?page=blok_akun&id=<?php echo $data->id_kasir; ?>"  onclick="return confirm('anda yakin ingin mengubah data?');">Blok Akun&nbsp;&nbsp;<span class="glyphicon glyphicon-ban-circle"></span></a>


 					
  
</td>
                </tr>
                <?php }} ?>
                 </tbody>
            </table></div>
            
            <a href="?page=akun_yang_diblok" class="btn btn-info">Lihat Akun Yang Diblokir&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
            
            <?php } ?>