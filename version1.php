<html>
<body>
<?php
//1'
include('config.php);
//2TINGGAL BRECKET
if(isset($_POST['submit'])
{

//3belakang tak tutup
$id=($_POST['id'])
$nama_pelajar=($_POST['nama_pelajar']);
$no_kp=($_POST['no_kp']);

//4mysqli 
//5 con
//6SEMICOLON
$query1=mysql_query("insert into data pelajar values('$id'),'$nama_pelajar','$no_kp')")

//7tak nama query
if ($query) 
{
	//8tiada .php
	header("location:senarai_pelajar);
}
}
?>	

<center>
<fieldset style="width:500px;">
<h4>TAMBAH REKOD PELAJAR</h4>
<!--9SINI-->
<form method="post" action="senarai_pelajar.php">
ID PELAJAR:<input type="text" name="id"><!--10BR-->
<!--11NAMA PEKERJA-->
NAMA PEKERJA:<input type="text" name="nama_pelajar"><br>
NO KP:<input type="text" name="no_kp"><!12--BR-->
<br><input type="submit" name="submit"><br>
<form>
</fieldset>
</center>
</body>
</html>