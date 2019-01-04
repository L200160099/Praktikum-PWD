<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Mahasiswa L200160099</title>
</head>
<body>
	<?php
	$koneksi = mysql_connect("localhost","root","");
	$db = mysql_select_db("informatika");
	?>
	<center>
		<?php
		if(isset($_GET['aksi'])){
			if($_GET['aksi'] == "ubah"){
			$ambil = mysql_fetch_row(mysql_query("select * from mahasiswa where nim='".$_GET['nim']."'"));
		?>
		<h3>Update Data Mahasiswa : </h3>
		<table border="0" width="30%">
		<form method="post" action="">
			<tr>
				<td width="25%">NIM</td>
				<td width="5%">:</td>
				<td width="65%">
					<input type="text" name="nimx" size="10" value="<?php echo $ambil[0] ?>" disabled>
					<input type="hidden" name="nim" size="10" value="<?php echo $ambil[0] ?>">
				</td>
			</tr>
			<tr>
				<td width="25%">Nama</td>
				<td width="5%">:</td>
				<td width="65%">
					<input type="text" name="nama" size="30" value="<?php echo $ambil[1] ?>">
				</td>
			</tr>
			<tr>
				<td width="25%">Kelas</td>
				<td width="5%">:</td>
				<td width="65%">
					<input type="radio" value="A" name="kelas" <?php if($ambil[2] == "A"){echo "checked";} ?>>A
					<input type="radio" value="B" name="kelas" <?php if($ambil[2] == "B"){echo "checked";} ?>>B
					<input type="radio" value="C" name="kelas" <?php if($ambil[2] == "C"){echo "checked";} ?>>C
				</td>
			</tr>
			<tr>
				<td width="25%">Alamat</td>
				<td width="5%">:</td>
				<td width="65%">
					<input type="text" name="alamat" size="40" value="<?php echo $ambil[3] ?>">
				</td>
			</tr>
		</table>
		<input type="submit" value="Update" name="update">
		</form>
		<?php
			if(isset($_POST['update'])){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$kelas = $_POST['kelas'];
				$alamat = $_POST['alamat'];

				$perintah = mysql_query("update mahasiswa set nama='".$nama."',kelas='".$kelas."',alamat='".$alamat."' where nim='".$nim."'");
				echo "<br>Data Berhasil diupdate";
				header("location:mod5.php");
			}
			}
		}else{
		?>
		<h3>Masukkan Data Mahasiswa : </h3>
		<table border="0" width="30%">
		<form method="post" action="">
			<tr>
				<td width="25%">NIM</td>
				<td width="5%">:</td>
				<td width="65%">
					<input type="text" name="nim" size="10">
				</td>
			</tr>
			<tr>
				<td width="25%">Nama</td>
				<td width="5%">:</td>
				<td width="65%">
					<input type="text" name="nama" size="30">
				</td>
			</tr>
			<tr>
				<td width="25%">Kelas</td>
				<td width="5%">:</td>
				<td width="65%">
					<input type="radio" value="A" name="kelas" checked>A
					<input type="radio" value="B" name="kelas">B
					<input type="radio" value="C" name="kelas">C
				</td>
			</tr>
			<tr>
				<td width="25%">Alamat</td>
				<td width="5%">:</td>
				<td width="65%">
					<input type="text" name="alamat" size="40">
				</td>
			</tr>
		</table>
		<input type="submit" value="Masukkan" name="submit">
		</form>
		<?php
		}
		if(isset($_POST['submit'])){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$kelas = $_POST['kelas'];
			$alamat = $_POST['alamat'];

			$perintah = "insert into mahasiswa (nim,nama,kelas,alamat) values ('".$nim."','".$nama."','".$kelas."','".$alamat."')";
			if(isset($_POST['submit']) && $nim == ""){
				echo "<br>NIM tidak boleh kosong, diisi dulu";
			}elseif($alamat == ""){
				echo "<br>Alamat tidak boleh kosong, diisi dulu";
			}elseif($nama == ""){
				echo "<br>Nama tidak boleh kosong, diisi dulu";
			}else{
				mysql_query($perintah);
				echo "<br>Data berhasil dimasukkan";
			}
		}
		?>
		<h3>Data Mahasiswa</h3>
		<table border="1" width="50%">
			<tr>
				<td align="center" width="20%">NIM</td>
				<td align="center" width="20%">Nama</td>
				<td align="center" width="10%">Kelas</td>
				<td align="center" width="20%">Alamat</td>
				<td align="center" width="20%">Keterangan</td>
			</tr>
			<?php
			$cari = "select * from mahasiswa order by nim";
			$hasil_cari = mysql_query($cari);
			while($data=mysql_fetch_row($hasil_cari)){
			?>
			<tr>
				<td align="center" width="20%"><?php echo $data[0] ?></td>
				<td align="center" width="20%"><?php echo $data[1] ?></td>
				<td align="center" width="10%"><?php echo $data[2] ?></td>
				<td align="center" width="20%"><?php echo $data[3] ?></td>
				<td align="center" width="20%"><a href="?nim=<?php echo $data[0] ?>&aksi=ubah">Ubah</a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</center>
</body>
</html>