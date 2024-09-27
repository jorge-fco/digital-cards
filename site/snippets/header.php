<!DOCTYPE html>
<html>
<head class="js-html">
	<!--TAGS-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">

	<!--FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

	<!--TITLE-->
	<title><?= $page->first_name() ?> <?= $page->last_name() ?> // <?= $site->title() ?></title>

	<!--✍️ CSS-->
	<?= css('assets/dist/main.min.css?v='.rand(1000, 2000)) ?>
</head>
<body class="js-body">