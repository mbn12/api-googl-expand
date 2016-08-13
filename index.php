<!DOCTYPE html>
<html lang="id">
<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="main.css">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="js/ngecek.js"></script>
</head>
<body>

<div class="container">
	<h1 class="page-header">Goo.gl Expander</h1>

<div class="form-group" >
<div class="input-group double-input">
	<input type="url" name="url" id="url" class="form-control" placeholder="Isi Short URL. Contoh: https://goo.gl/JYJO3t" required>
	<span class="input-group-btn"><button id="btncek" class="btn btn-info btn-addon" name="cek">Cek</button></span>
</div>
</div>
<div id="load" style="display:none;" align="center"><img src="load.gif"></div>
<span id="proses"></span>

</div>
</body>
<div class="container">
<footer class="footer" style="margin-top:200px;">
	<p class="text-muted">Goo.gl expand. <font size="-10"><a href="//dkit.ga">API by dikit.ga</a></font> </p>
</footer>
</div>
</html>