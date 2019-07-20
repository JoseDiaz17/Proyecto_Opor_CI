<!DOCTYPE html>
<html lang="en">

<body class="grey white-text">
	<div class="container center">
		<!--Mensaje-->
		<h4><?= $sms ?></h4>
		<br>
		<div class="row">
			<div class="col s8">
				<!--Este div contendra la tabla llamada a travez de ajax-->
				<div id="cuerpo"></div>
			</div>
		</div>
	</div>
	<script src="<?= base_url('assets/js/compreme.js') ?>"></script>
</body>

</html>
