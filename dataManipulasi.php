<?php 
	include 'koneksi.php';

	error_reporting(E_ERROR||E_PARSE);

	if(isset($_GET[iddelete])){
		$sqlDelete="DELETE FROM tb_pegawai WHERE  id_pegawai='$_GET[iddelete]'";
		echo $sqlDelete;
		mysqli_query($con,$sqlDelete);
	}
	
	$sql = "SELECT * FROM tb_pegawai";
	$hasil = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Manipulation</title>
	<link rel="icon" type="image/png" href="image/logoBar.png">
	<meta charset="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Raleway">
	<link rel="stylesheet" href="materialize/w3.css">
	<script src="materialize/js/materialize.min.js"></script>
	<style>
		html, body, h1, h2, h3, h4, h5 {font-family: "Raleway", sans-serif}
	</style>
</head>
<body>
	<div class="w3-bar w3-top w3-white w3-xlarge" style="z-index:4">
		<span class="w3-bar-item w3-right"><img src="image/logoFix.png" class="w3-round w3-right" style="width:20%"></span>
	</div> 

	<div class="w3-top" style="padding-top:62px">
		<div class="w3-bar w3-black w3-card-2">
			<a href="logout_proses.php" class="w3-bar-item w3-button w3-padding-large w3-right">Logout</a>
			<a href="tambahData.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Insert Data</a>
		</div>
	</div>

	<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
		<a href="logout_proses.php" class="w3-bar-item w3-padding-large">Logout</a>
		<a href="tambahData.php" class="w3-bar-item w3-button w3-padding-large">Insert Data</a>
	</div>

	<div class="w3-container" style="margin-top:70px">
		<header class="w3-container w3-center" style="padding-top:55px">
			<h5><b>Data Manipulation</b></h5>
		</header>
		
		<div class="w3-container" style="padding-top:20px">
			<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
				<tr>
					<td>No</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Gender</td>
					<td>Birth Date</td>
					<td>Phone</td>
					<td>Position</td>
					<td>Address</td>
					<td>Action</td>
				</tr>
				<?php
					$i=1;
					while($pegawai = mysqli_fetch_array($hasil)){
						echo "<tr>
								<td>$i</td>
								<td>$pegawai[nama_depan]</td>
								<td>$pegawai[nama_belakang]</td>
								<td>$pegawai[jenis_kelamin]</td>
								<td>$pegawai[tanggal_lahir]</td>
								<td>$pegawai[no_hp]</td>
								<td>$pegawai[jabatan]</td>
								<td>$pegawai[alamat]</td>
								<td> <a href='formEdit.php?idedit=$pegawai[id_pegawai]'>Edit</a> | <a href='dataManipulasi.php?iddelete=$pegawai[id_pegawai]'>Delete</a></td>
								</tr>";

						$i++;
					}
				?>
			</table>
		</div>
	</div>

</body>
</html>