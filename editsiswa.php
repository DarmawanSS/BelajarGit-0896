<?php
// online
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if(!isset($_POST['kirim'])){
	exit('Access Forbiden');
}

$siswa = new Siswa();

$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['foto'] = 'img/'.$_POST[in_nis].'.png';

//$siswa->updateSiswa($_POST['in_nis'], $data);

if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.jpg')){
	exit('error upload file');
}

$data['input_name'] = addslashes($_POST['in_name']);
$data['input_email'] = $_POST ['in_email'];
$data['input_nationality'] = $_POST['in_nation']

echo "Data siswa Berhasil di update <br />";
echo "<a href='usiswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>";

?>
