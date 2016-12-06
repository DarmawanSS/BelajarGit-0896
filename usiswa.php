<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');


$id = $_GET['id'];

if(!is_numeric($id)){
	exit('Access Forbiden');
}

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

$nation = new nationality();
$data_nation = $nation->readAllNationality();

if(empty($data)){
	exit('Siswa is not found');
}

$dt = $data[0];

?>

<h1>Edit Data Siswa</h1>
<form action="editsiswa.php?a=<?php echo$id?>" method="post" enctype="multipart/form-data">
	NIS:<br />
	<input type="text" value="<?php echo $dt['id_siswa']?>" readonly="true" name="in_nis"><br />
	Nama Lengkap:<br />
	<input type="text" value="<?php echo $dt['full_name']?>" name="in_name"><br />
	Email:<br />
	<input type="text" value="<?php echo $dt['email']?>" name="in_email"><br />
	Kewarganegaraan:<br />
	<select name="in_nation">
		<option value=""> --Pilih negara-- </option>
		<?php foreach($data_nation as $n): ?>
		<?php $s = ($dt['id_nationality'] == $n['id_nationality'])?"selected":"" ?>
		<option value="<?php echo $n['id_nationality']?>" <?php echo $s ?>>
			<?php echo $n['nationality']?></option>
		<?php endforeach ?>
	</select><br /><br />
	foto:<input type="file" name="in_foto"><br />
	<input type="submit" name="kirim" value="Simpan">
</form>