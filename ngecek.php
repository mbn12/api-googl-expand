<?php
function pisah($string)
{
	if(substr(trim($string), -1) == '/'){ $string =  substr(trim($string), 0, strlen($string) -1); }
	return $string ;
}
if(isset($_POST['url']))
{
		$ur 		= 	$_POST['url'];
		$url 		= 	"http://dkit.ga/api/expand/googl-v1.php?url=" . pisah($ur); //SERVER API nya
		$ambil 		= 	file_get_contents($url); 									// cURL nya
		$outp  		= 	json_decode($ambil, true);
		$detail 	= 	$outp['detail'];
		$analistik 	= 	$outp['analistik'];
		$dibuat 	=	substr($detail['dibuat'],0,10);
//echo $ambil;

if($ambil == 'Error') {echo '<div class="alert alert-danger">URL tidak ditemukan.</div>'; exit();}	
?>
<div class="col-md-6">

<table class="table table-hover table-bordered">
	<thead>
		<th colspan="2" style="text-align:center;"><h4>Informasi</h4></th>
	</thead>
	<tbody>
	<tr>
		<th>URL</th>
		<td><?php echo $detail['url'] . ' <a class="glyphicon glyphicon-link pull-right" href="'.$detail['url'].'" target="_blank"></a>'; ?></td>
	</tr>
	<tr>
		<th>URL Panjang</th>
		<td><?php echo urldecode($detail['longUrl']); ?></td>
	</tr>
	<tr>
		<th>URL Dibuat</th>
		<td ><?php echo  $dibuat; ?></td>
	</tr>
	<tr>
		<th>Link Scan</th>
		<td ><?php if($detail['status'] =='OK') { // STATUS OK = Bila Aman, MALWARE = Berbahaya ?>
			 	<?php echo "<font color='#3ECC78' size='3'><b>". "Aman!" . "</b><i class='glyphicon glyphicon-ok pull-right'></i></font>";  ?> 
			 <?php } else {echo "<font color='#F77A6F'>". $detail['status'] . "<i class='glyphicon glyphicon-exclamation-sign pull-right'></i></font>"; } ?>
		</td>
	</tr>
	</tbody>
</table>
</div>

<div class="col-md-6">
<table class="table table-hover table-bordered">
	<thead>
		<th colspan="2" style="text-align:center;"><h4>Analystic</h4></th>
	</thead>
	<tbody>
	<tr>
		<th colspan="2" style="text-align:center;">Jumlah Klik</th>
	</tr>
	<tr>
		<th width="150">Short URL</th>
		<td><?php echo $analistik['shortClicks']."x"; ?></td>
	</tr>
	<tr>
		<th>Long URL</th>
		<td><?php echo $analistik['longClicks'] ."x"; ?></td>
	</tr>
	</tbody>
</table>
</div>
</div>

<?php
}
?>