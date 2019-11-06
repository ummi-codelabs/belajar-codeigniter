<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tambah data mahasiswa</title>
</head>

<body>

<h2>Tambah data mahasiswa</h2>

<?php echo form_open('mahasiswa/form_tambah');?>

<label>NIM</label> <br>
<input type="text" name="nim" value="<?php echo set_value('nim');?>">
<?php echo form_error('nim');?> 
<br>

<label>Nama</label> <br>
<input type="text" name="nama" value="<?php echo set_value('nama');?>">
<?php echo form_error('nama');?> 
<br>

<button type="submit">Save</button>

<?php echo form_close();?>

</body>

</html>
