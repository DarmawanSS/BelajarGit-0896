<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/Age.php');

$siswa = new siswa();
$data = $siswa->readAllsiswa();

?>

<table border="1">
	<tr>
		<th>NIS</th>
		<th>FULL NAME</th>
		<th>DATE OF BIRTH</th>
		<th>AGE</th>
		<th>NATIONALITY</th>
		
		<th></th>
		<th></th>
		<th></th>
		
	</tr>
	<?php foreach($data as $a) :?>
	<tr>
		<td><?php echo $a['nis']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['date_ob']?></td>
		<td><?php echo $a['date_ob']?></td>
		<td><?php echo $a['nationality']?></td>
		<td><a href="dsiswa.php?id=<?php echo $a['id_siswa']?>">Detail</a></td>
		<td><a href="usiswa.php?id=<?php echo $a['id_siswa']?>">Edit</a></td>
		<td><a href="delsiswa.php?id=<?php echo $a['id_siswa']?>">Delete</a></td>
		
	</tr>
	<?php endforeach?>
</table>