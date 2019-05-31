<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title(''); ?></title>
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
                <img src="<?= get_template_directory_uri(); ?>/src/images/logo.svg" alt="Goran Schyns, web & graphic designer" class="h1__img">
                <span class="hidden">Goran Schyns</span>
            </a>
        </h1>
        <div class="nav">
            <h2 class="nav__h2 hidden">Main navigation</h2>
            <i id="burger" class="material-icons" onclick="burger()"><svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.74 23.02" fill="#1A1A20" height="23" width="30"><defs><style>.cls-1{fill:#1a1a20;}</style></defs><title>Sans titre - 1</title><rect id="Rectangle_3" data-name="Rectangle 3" class="cls-1" width="29.74" height="2.85"/><rect id="Rectangle_4" data-name="Rectangle 4" class="cls-1" y="10.09" width="20.14" height="2.85"/><rect id="Rectangle_5" data-name="Rectangle 5" class="cls-1" y="20.17" width="29.74" height="2.85"/></svg></i>
            <i id="quit" class="material-icons" onclick="quit()">Close</i>
            <div id="links">
                <?php foreach (dw_getMenu('main') as $item): ?>
                        <a href="<?= $item -> url; ?>" class="links__a"><?= $item -> label; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
	</header>



