<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Situsduabe | Official Website for CE-2B</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default" id="atas">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" style="background:#fff;color:black;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Polling</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Admin</a></li>
        <li><a href="anggota.php">Anggota</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<center><h1>Halaman Administrator Polling</h1></center><hr>
<div class="well">
<h2>Buat voting baru</h2><hr>
<form action="proses_input.php" method="post">
    <div class="row" style="margin-bottom:20px">
        <div class="col-lg-2 col-xs-12">Judul</div>
        <div class="col-lg-10 col-xs-12">
        <textarea name="isi" class="form-control"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-xs-12">Status</div>
        <div class="col-lg-10 col-xs-12">
        <select name="status">
            <option value="T">Tidak Aktif</option>
            <option value="A">Aktif </option>
        </select>
        <p><p>
        <input type="submit" name="sub" class="btn btn-success" value="Simpan">
        </div>
    </div>
</form>

</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>