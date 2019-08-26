<?php
@session_start();
require_once 'koneksi.php';
if (@$_SESSION['kaprodi'] || @$_SESSION['admin'] || @$_SESSION['admin']) {
	header("location: index.php");
}
else {
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/sass.jpg">

    <title>Login Surat Keterangan Pendamping Ijazah</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
  

    <div class="container">

      <form class="form-signin" action="p_login.php" method="post">
        <h3><center><b><font face="monotype corsiva">Sign In SKPI STIKes</font></b></center></h3>
        <label for="username" class="sr-only">Username</label>
        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="a">Sign In</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
<?php
}
?>