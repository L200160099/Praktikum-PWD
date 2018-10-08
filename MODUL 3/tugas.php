<html>
	<head>
		<title>Program Penjumlahan</title>
	</head>
	<body>
		<form method='post' action='Tugas.php'>
			<p>Nilai A adalah <input type='text' name='nA' size='20'></p>
			<p>Nilai B adalah <input type='text' name='nB' size='20'></p>
			<p><input type='submit' value='Jumlahkan' name='submit'></p>
		</form>
		
		<?php
		error_reporting (E_ALL ^ E_NOTICE);
		$nilaiA = $_POST['nA'];
		$nilaiB = $_POST['nB'];
		$submit = $_POST['submit'];
		$hasil = $nilaiA + $nilaiB;
		
		if($submit){
			echo"</br></br></br>";
			echo"Nilai A adalah $nilaiA</br>";
			echo"Nilai B adalah $nilaiB</br>";
			echo"Jadi Nilai A ditambah Nilai B adalah $hasil </br></br>";
			echo"HORE BERHASIL MAS BROOOO</br>";
		}
		?>
	</body>
</html>