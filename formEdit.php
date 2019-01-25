<?php 
	include 'koneksi.php';

	error_reporting(E_ERROR||E_PARSE);

	if(isset($_GET[idedit])){
		$sql_Name="SELECT * FROM tb_pegawai where id_pegawai='$_GET[idedit]'";
		
		$coba=mysqli_query($con,$sql_Name);
		$pegawai=mysqli_fetch_array($coba);
	}

	if(isset($_POST[new_first])){
		$new_first = $_POST[new_first];
		$id= $_POST[id];
		$sql_update="UPDATE tb_pegawai set nama_depan='$new_first' where id_pegawai='$id'";
		mysqli_query($con, $sql_update);
		echo "<meta http-equiv='refresh' content='0;url=dataManipulasi.php'>";
	}

	if(isset($_POST[new_last])){
		$new_last = $_POST[new_last];
		$id= $_POST[id];
		$sql_update="UPDATE tb_pegawai set nama_depan='$new_last' where id_pegawai='$id'";
		mysqli_query($con, $sql_update);
		echo "<meta http-equiv='refresh' content='0;url=dataManipulasi.php'>";
	}

	if(isset($_POST[new_gender])){
		$new_gender = $_POST[new_gender];
		$id= $_POST[id];
		$sql_update="UPDATE tb_pegawai set jenis_kelamin='$new_gender' where id_pegawai='$id'";
		mysqli_query($con, $sql_update);
		echo "<meta http-equiv='refresh' content='0;url=dataManipulasi.php'>";
	}

	if(isset($_POST[new_birthdate])){
		$new_birthdate = $_POST[new_birthdate];
		$id= $_POST[id];
		$sql_update="UPDATE tb_pegawai set tanggal_lahir='$new_birthdate' where id_pegawai='$id'";
		mysqli_query($con, $sql_update);
		echo "<meta http-equiv='refresh' content='0;url=dataManipulasi.php'>";
	}

	if(isset($_POST[new_phone])){
		$new_phone = $_POST[new_phone];
		$id= $_POST[id];
		$sql_update="UPDATE tb_pegawai set no_hp='$new_phone' where id_pegawai='$id'";
		mysqli_query($con, $sql_update);
		echo "<meta http-equiv='refresh' content='0;url=dataManipulasi.php'>";
	}

	if(isset($_POST[new_position])){
		$new_position = $_POST[new_position];
		$id= $_POST[id];
		$sql_update="UPDATE tb_pegawai set jabatan='$new_position' where id_pegawai='$id'";
		mysqli_query($con, $sql_update);
		echo "<meta http-equiv='refresh' content='0;url=dataManipulasi.php'>";
	}

	if(isset($_POST[new_address])){
		$new_address = $_POST[new_address];
		$id= $_POST[id];
		$sql_update="UPDATE tb_pegawai set alamat='$new_address' where id_pegawai='$id'";
		mysqli_query($con, $sql_update);
		echo "<meta http-equiv='refresh' content='0;url=dataManipulasi.php'>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="icon" type="image/png" href="image/logoBar.png">
	<meta charset="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Raleway">
	<link rel="stylesheet" href="materialize/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="materialize/js/materialize.min.js"></script>
	<style>
		html, body, h1, h2, h3, h4, h5 {font-family: "Raleway", sans-serif}
	</style>
</head>
<body>
	<div class="w3-bar w3-top w3-white w3-xlarge" style="z-index:4">
		<span class="w3-bar-item w3-right"><img src="image/logoFix.png" class="w3-round w3-right" style="width:20%"></span>
	</div>

	<div class="w3-display-topmiddle w3-container w3-col l6 m8" style="padding-top:75px;width:800px;">

		<form action="dataManipulasi.php" class="w3-container w3-card-2">
			<h2 class="w3-center w3-black">Edit Data</h2>
			<p>
				<label>First Name</label>
				<input class="w3-input w3-hover-black" type="text" name="firstName">
			</p>

			<p>
				<label>Last Name</label>
				<input class="w3-input w3-hover-black" type="text" name="lastName">
			</p>

			<p>
				<label>Gender</label>
			</p>
			<p>
				<input class="w3-radio" type="radio" name="gender" value="female">
				<label>Female</label>
				<input class="w3-radio" type="radio" name="gender" value="male">
				<label>Male</label>
			</p>

			<p>
				<label>Birth Date</label>
				<input class="w3-input w3-hover-black" type="date" name="birthDate">
			</p>

			<p>
				<label>Phone</label>
				<input class="w3-input w3-hover-black" type="text" name="phone">
			</p>

			<p>
				<select class="w3-select w3-hover-black" name="position">
					<option value="" disabled selected>Position</option>
					<option value="cleaningService">Cleaning Service</option>
					<option value="engineering">Engineering</option>
					<option value="staff">Staff</option>
				</select>
			</p>

			<p>
				<label>Address</label>
				<input class="w3-input w3-hover-black" type="textarea" name="address">
			</p>

				<button class="w3-btn w3-black w3-section">Save </button>
				<a href="formEdit.php" class="w3-btn w3-red w3-section">Cancel</a>
			
		</form>
	</div>

</body>
</html>