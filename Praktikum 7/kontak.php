<!DOCTYPE html>
<html>
<head>
	<title>Kontak</title>
<style type="text/css">
  h1{
  color: #fa8072;
  font-family: times;
  text-decoration: underline;
  }
 body{
  color: white;
  background-color: black;
     }
 table{
  background: transparent;
 }input[type=submit]{
 	background-color: green;
	border-radius: 8px;
	color: white;
	font-size: 16px;
 }input[type=reset]{
 	background-color: red;
	border-radius: 8px;
	color: white;
	font-size: 16px;
 }
</style>
</head>
<body>
<center>
	<h1>Kontak</h1>
	<form method="POST" action="index.php">
	<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jkel" value="L"> Laki-Laki <input type="radio" name="jkel" value="P"> Perempuan</td>
	</tr>
	<tr> 
		<td>Email</td>
		<td>: </td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td> 
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Kota</td>
		<td>:</td> 
		<td><select name="kota">
				<option value="Surabaya">Surabaya</option>
				<option value="Gresik">Gresik</option>
				<option value="Pasuruhan">Pasuruhan</option>
				<option value="Sidoarjo">Sidoarjo</option>
				<option value="Korea Selatan">Seoul</option>
				<option value="Busan">Busan</option>
				<option value="Exo Planet">Exo Planet</option>
			</select></td>
	</tr>
	<tr>
		<td>Pesan</td>
		<td>: </td>
		<td><textarea name="pesan" cols="50" rows="7"></textarea></td>
	</tr>	
	</table>
	<p><input type="submit" name="submit" value="Kirim"> <input type="reset" name="reset" value="Reset"></p>	
	</form>
</center>
</body>
</html>