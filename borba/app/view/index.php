<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simulacija borbe</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<!-- Ispis vanredne situacije -->
	<div>
		<h4 class="text-center"> <?= isset(Vojska::$vanrednoStanje) ? "<div class='alert alert-info'>" . Vojska::$vanrednoStanje . "</div>" : "" ?> </h4>
	</div>

	<!-- Ispis strukture vojske -->
	<div class="row">
		<div class="col-md-12">
			<?php if (isset($vojska1)): ?>
				<h4 class="text-center">Struktura <?= $vojska1; ?> vojske!</h4>
			<?php foreach ($vojska1->getVojska() as $vojnik) : ?>
				<div class="col-md-3"><?php var_dump($vojnik); ?></div>
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	
	<!-- Ispis strukture vojske -->
	<div class="row">
		<div class="col-md-12">
			<?php if (isset($vojska2)): ?>
				<h4 class="text-center">Struktura <?= $vojska2; ?> vojske!</h4>
			<?php foreach ($vojska2->getVojska() as $vojnik) : ?>
				<div class="col-md-3"><?php var_dump($vojnik); ?></div>
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- Ispis gresaka popunjavanja input polja -->
	<div>
		<h4 class="text-center">
			<?= isset($error) ? "<div class='alert alert-danger'>" . $error . "</div>" : "" ?>
		</h4>
	</div>
	
	<!-- Zakljucak i tekst odvijanja rata 2 vojske -->
	<div class="col-md-12">
		<?= isset(Borba::$poruka) ? "<h4>" . Borba::$poruka . "</h4>" : "" ?>
		<div>
			<h4><?= isset(Borba::$zakljucak) ? "<div class='alert alert-success text-center'>" . Borba::$zakljucak . "</div>" : "" ?></h4>
		</div>
	</div>

	<!-- Forma za unos broja vojske -->
	<div class="container">
		<h2 align="center" style="margin-bottom: 30px;">Simulacija borbe 2 vojske.</h2>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<form action="" method="get" class="forma">
				<div class="form-group">
					<label for="">Molimo Vas unesite broj prve vojske</label>
					<input type="text" id="prva" name="army1" class="form-control" required min="1">
				</div>
				<div class="form-group">
					<label for="">Molimo Vas unesite broj druge vojske</label>
					<input type="text" id="druga" name="army2" class="form-control" required min="1">
				</div>
				<div class="form-group">
					<input type="submit" value="Zapocni borbu" class="btn btn-success btn-block borba">
				</div>
			</form>
			</div>
		</div>
	</div>

</body>
</html>