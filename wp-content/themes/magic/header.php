<html>
<head>
	<title><?= bloginfo('name') ?></title>
	<meta charset="<?= bloginfo('charset') ?>">
	<meta name="description" content="<?= bloginfo('description') ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="<?= bloginfo('template_url') ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?= bloginfo('template_url') ?>/css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="<?= bloginfo('template_url') ?>/css/camera.css" type="text/css" />
	<link rel="stylesheet" href="<?= bloginfo('template_url') ?>/css/slicknav.css" type="text/css" />
	<link rel="stylesheet" href="<?= bloginfo('template_url') ?>/css/prettyPhoto.css" type="text/css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700" type="text/css" />
	<link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_url') ?>/css/style.css">

	<?= wp_head() ?>
</head>
<body>