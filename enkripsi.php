<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>

	<!-- form inputan -->
	<form method="post">
		<div class="form-group">
			<label for="exampleFormControlInput1">Input String</label>
			<input type="text" class="form-control" name="input"> // attribute name untuk penamaan kolom inputan
			<button class="btn btn-primary mt-2">Submit</button>
		</div>
	</form>

<?php 
	
	// jika ada inputan dari form diatas maka proses didalam if berjalan
	if(isset($_POST['input'])){

		$inputan = $_POST['input'];

	$metode = "AES-256-CBC"; // metode enkripsi
	$hash = "sdasdjaqweqwrrwtgfdakASDIQWJAK/asdad"; // generate hash
	$IV = openssl_random_pseudo_bytes(openssl_cipher_iv_length("AES-256-CBC")); // untuk mengacak string

	$hasil_enkripsi = openssl_encrypt($inputan, $metode, $hash, 0, $IV); //proses enkripsi menggunakan openssl

	$hasil_dekripsi = openssl_decrypt($hasil_enkripsi, $metode, $hash, 0, $IV); // proses dekripsi menggunakan openssl

	echo "Hasil Enkripsi <br>";
	echo $hasil_enkripsi;
	echo "<br>";
	echo "Hasil Dekripsi <br>";
	echo $hasil_dekripsi;

	}

?>

</body>
</html>