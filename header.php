<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title><?php echo siteTitle(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="author" content="Franziskus Nakajima">
    <meta name="mobile-web-app-capable" content="yes">
    <meta id="theme-color" name="theme-color" content="#cb0000">
		<?php
		 	echo requireCss(themeUrl() . "css/bootstrap.min.css");
			echo requireCss(themeUrl() . "css/responsive.css");
			?>
		<?php
			call_anchor("css_frontend");
			call_anchor("js_frontend");
		?>
	</head>
	<body>
		<div class="container">
			<header class="row">
				<div id="title" class="col-xs-12 centered">
						<h1><a href="<?php echo linkToSite(); ?>"><?php echo siteTitle(); ?></a></h1>
				</div>
				<nav class="col-xs-12">
						<?php echo pageList(); ?>
				</nav>
			</header>
			<div id="main" class="row">
				<div id="content" class="col-xs-12">
