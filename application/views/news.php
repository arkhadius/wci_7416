<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>News</title>
</head>
<body>

<div>
	<h1><?php echo $page_title;?></h1>
	<table border="1">
		<tr>
			<th style="border:1px">No.</th>
			<th style="border:1px">Judul</th>
			<th style="border:1px">Isi Berita</th>
		</tr>
	<?php foreach($berita as $berita):?>
		<tr>
			<td><?php echo $berita->id;?></td>
			<td><?php echo $berita->title;?></td>
			<td><?php echo $berita->text;?></td>
		</tr>
	<?php endforeach;?>
	</table>
</body>
</html>