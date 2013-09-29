<center>
	<?php if($_POST['type'] == 'penjumlahan'){ ?>
	Hasil Penjumlahan dari <?php echo $_POST['angka1'] ?> dan <?php echo $_POST['angka2'] ?> adalah :
	<h2><?php echo $_POST['angka1']+$_POST['angka2'] ?></h2>
	<?php }else if($_POST['type'] == 'pengurangan'){ ?>
	Hasil Pengurangan dari <?php echo $_POST['angka1'] ?> dan <?php echo $_POST['angka2'] ?> adalah :
	<h2><?php echo $_POST['angka1']-$_POST['angka2'] ?></h2>
	<?php }else if($_POST['type'] == 'perkalian'){ ?>
	Hasil Perkalian dari <?php echo $_POST['angka1'] ?> dan <?php echo $_POST['angka2'] ?> adalah :
	<h2><?php echo $_POST['angka1']*$_POST['angka2'] ?></h2>
	<?php }else if($_POST['type'] == 'pembagian'){ ?>
	Hasil Pembagian dari <?php echo $_POST['angka1']; ?> dan <?php echo $_POST['angka2']; ?> adalah :
	<h2><?php echo $_POST['angka1']/$_POST['angka2']; ?></h2>
	<?php } ?>
</center>