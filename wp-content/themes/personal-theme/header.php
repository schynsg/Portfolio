<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | Goran Schyns</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Goran Schyns">
    <meta name="description" content="Hi ! My name is Goran Schyns. I'm a belgian web & graphic designer from Kelmis, Liège. Always curious and looking for new challenges.">
    <meta name="keywords" content="Portfolio, Goran Schyns, Web Designer, Infographiste, Web Master">
    <link rel="icon" href="<?= get_template_directory_uri(); ?>/src/images/goran-schyns.ico">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/src/css/styles.css">
</head>
<body>
	<header>
        <h1>
            <a href="<?= get_home_url(); ?>" class="header__link" title="Home">
                <img src="<?= get_template_directory_uri(); ?>/src/images/logo.svg" alt="Goran Schyns, web & graphic designer">
                <span class="hidden">Goran Schyns</span>
            </a>
        </h1>
        <div class="nav">
            <h2 class="nav__h2">Main navigation</h2>
            <i id="burger" class="material-icons" onclick="burger()">Menu</i>
            <i id="quit" class="material-icons" onclick="quit()">close</i>
            <div id="links">
                <a href="">Home</a>
                <a href="">About me</a>
                <a href="">My projects</a>
                <a href="">Contact me</a>
            </div>
        </div>
	</header>

