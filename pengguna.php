  
   <h2 class="sub-header">Pengguna </h2>
 <p><a href="?page=tambah_pengguna" class="btn btn-lg btn-primary">Tambah Pengguna    <span class="glyphicon glyphicon-plus" aria-hidden-"true"></span></a></p>
    
    
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr bgcolor="#CCCCCC">
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Type User</th>
                  <th>Aksi</th>
                   
                </tr>
              </thead>
              
              
              <?php
              include "koneksi.php";
					$query 	= "SELECT user.*, mahasiswa.* FROM user, mahasiswa";
					$sql	= mysqli_query ($koneksi, $query);
					while ($data = mysqli_fetch_object ($sql)) {
						$no=1;
						?>
              <tbody>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data->nama; ?></td>
                  <td><?php echo $data->username; ?></td>
                  <td><?php echo $data->password; ?></td>
                  <td><?php echo $data->type_user; ?></td>
                  <td>
                    <a class='edit' href="editpengguna.php">Edit</a> |
                    <a class='hapus' href="hapuspengguna.php">Hapus</a>
                  </td>
                </tr>
                <?php } ?>
                 </tbody>
             </table></div>
          </div>
        </div>