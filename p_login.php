<?php 

@session_start();
require_once 'koneksi.php';
$username	= @$_POST['username'];
$password	= @$_POST['password'];
$login		= $_POST['login'];

if($login) {
		
	
	if($username == "" || $password == "") {
		echo "<script>alert('Username atau Password masih kosong');
		location.href=login.php';
		</script>";
	}
	
	
		
	
	else {
		$sql	=	mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
		$data	=	mysqli_fetch_array($sql);
		$cek	=	mysqli_num_rows($sql);
		
		if ($cek >= 1) {
			if ($data['type_user']== "kaprodi") {
				@$_SESSION['kaprodi']= $data['id_user'];
				header("location: index.php");
			}
			else if ($data['type_user'] == "admin") {
				@$_SESSION['admin']= $data['id_user'];
				header("location: index.php");
			}
			else if ($data['type_user'] == "mahasiswa") {
				@$_SESSION['mahasiswa']= $data['id_user'];
				header("location: index.php");
			}
			
		}
		
	
		
		else {
			echo "<script>alert('Username atau Password salah');
			location.href='login.php'
			</script>";
			
				} 
	}
	
	
}
?>