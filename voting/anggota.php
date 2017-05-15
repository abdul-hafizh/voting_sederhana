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
<center><h1>Responden Voting</h1></center><hr>
<?php
include "koneksi.php";
$data=mysql_query("select * from polling where aktif='A'");
while ($dbdata=mysql_fetch_assoc($data)){
echo "<div class='well'><h3>
".$dbdata["isi"]."</h3>
<form action='proses_voting.php' method='post'>
		<input type='hidden' name='nomor' value=".$dbdata["nomor"]."></input>
        <input type='radio' id='sb' name='pilih' value='sb'> <label for='sb'>Sangat Baik</label><br>
        <input type='radio' id='b' name='pilih' value='b'> <label for='b'>Baik</label><br>
        <input type='radio' id='s' name='pilih' value='s'> <label for='s'>Sedang</label><br>
        <input type='radio' id='br' name='pilih' value='br'> <label for='br'>Buruk</label><br><p><br>
        <input type='submit' name='subvot' value='Selesai' class='btn btn-primary btn-sm'>
</form>
</div>";
}
?>
<hr/>
<h3>Hasil voting</h3>
<hr/>
<?php
include "koneksi.php";
echo "<table class='table table-bordered'>";
echo "<tr class='info'>
        <th>Isi</th>
        <th>Sangat Baik</th>
        <th>Baik</th>
        <th>Sedang</th>
        <th>Buruk</th>";
$table=mysql_query("select * from polling order by nomor desc");
while($dbtable=mysql_fetch_array($table)){
    echo "<tr>
            <td>".$dbtable["isi"]."</td>
            <td>".$dbtable["sangat_baik"]."</td>
            <td>".$dbtable["baik"]."</td>
            <td>".$dbtable["sedang"]."</td>
            <td>".$dbtable["buruk"]."</td>";
    }
 
echo "</table>";
?>

</div>
</body>
</html>