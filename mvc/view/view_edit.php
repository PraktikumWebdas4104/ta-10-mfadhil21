<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr >
					<td align="center">Genre film</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="genre[]" value="horror" <?php  if(in_array("horror",$genre)){echo "checked";}?>/>Horror <br>
						<input type="checkbox" name="genre[]"  value="action" <?php  if(in_array("action",$genre)){echo "checked";}?>/>Action <br>
						<input type="checkbox" name="genre[]"  value="anime" <?php  if(in_array("anime",$genre)){echo "checked";}?>/>Anime <br>
						<input type="checkbox" name="genre[]"  value="thriller" <?php  if(in_array("thriller",$genre)){echo "checked";}?>/>Thriller <br>
						<input type="checkbox" name="genre[]"  value="animasi" <?php  if(in_array("animasi",$genre)){echo "checked";}?>/>Animasi <br>
					</td>
				</tr>
				<tr >
					<td align="center">Tujuan travel</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="wisata[]"  value="Bali" <?php  if(in_array("Bali",$wisata)){echo "checked";}?>/>Bali <br>
						<input type="checkbox" name="wisata[]"  value="Raja Ampat" <?php  if(in_array("Raja ampat",$wisata)){echo "checked";}?>/>Raja Ampat <br>
						<input type="checkbox" name="wisata[]"  value="Pulau Derawan" <?php  if(in_array("Pulau Derawan",$wisata)){echo "checked";}?>/>Pulau Derawan <br>
						<input type="checkbox" name="wisata[]"  value="Bangka Belitung" <?php  if(in_array("Bangka belitung",$wisata)){echo "checked";}?>/>Bangka Belitung <br>
						<input type="checkbox" name="wisata[]"  value="Labuan Bajo" <?php  if(in_array("Labuan bajo",$wisata)){echo "checked";}?>/>Labuan Bajo <br>
					</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();
		//panggil controller update
	}
?>