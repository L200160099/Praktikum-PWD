<html>
<head>
<title> VARIABLE </title>
</head>
<body>
<h1> Nilai </h1>
<form method='POST' action='kendali.php'>
<p>Masukkan Nili Angka (0-100) : <input type='text' name='nilai' size='3'> </p>
<p> <input type='submit' value='Proses' name='submit'> </p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilai = $_POST['nilai'];
$submit = $_POST['submit'];
if($submit){
	if($nilai==''){
		$huruf='"Nilai kosong/belum diisi"';
	}else if ($nilai<=20){
		$huruf='E';
	}else if ($nilai<=40){
		$huruf='D';
	}else if ($nilai<=60){
		$huruf='C';
	}else if ($nilai<=80){
		$huruf='B';
	}else if ($nilai<=100){
		$huruf='A';
	}else{
		$huruf='"nilai yang dimasukkan salah"';
	}
	echo"Nilai angka adalah $nilai</br>";
	echo"maka nilai huruf adalah $huruf";
}
?>		
</body>
</html>