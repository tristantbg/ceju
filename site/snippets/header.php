<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="canonical" href="<?php echo html($page->url()) ?>" />
	<?php if($page->isHomepage()): ?>
		<title><?= $site->title()->html() ?></title>
	<?php else: ?>
		<title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
	<?php endif ?>
	<?php if($page->isHomepage()): ?>
		<meta name="description" content="<?= $site->description()->html() ?>">
	<?php else: ?>
		<meta name="DC.Title" content="<?= $page->title()->html() ?>" />
		<?php if(!$page->text()->empty()): ?>
			<meta name="description" content="<?= $page->text()->excerpt(250) ?>">
			<meta name="DC.Description" content="<?= $page->text()->excerpt(250) ?>"/ >
			<meta property="og:description" content="<?= $page->text()->excerpt(250) ?>" />
		<?php else: ?>
			<meta name="description" content="">
			<meta name="DC.Description" content=""/ >
			<meta property="og:description" content="" />
		<?php endif ?>
	<?php endif ?>
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="<?= $site->keywords()->html() ?>">
	<?php if($page->isHomepage()): ?>
		<meta itemprop="name" content="<?= $site->title()->html() ?>">
		<meta property="og:title" content="<?= $site->title()->html() ?>" />
	<?php else: ?>
		<meta itemprop="name" content="<?= $page->title()->html() ?> | <?= $site->title()->html() ?>">
		<meta property="og:title" content="<?= $page->title()->html() ?> | <?= $site->title()->html() ?>" />
	<?php endif ?>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?= html($page->url()) ?>" />
	<?php if($page->content()->name() == "project"): ?>
		<?php if (!$page->featured()->empty()): ?>
			<meta property="og:image" content="<?= resizeOnDemand($page->image($page->featured()), 1200) ?>"/>
		<?php endif ?>
	<?php else: ?>
		<?php if(!$site->ogimage()->empty()): ?>
			<meta property="og:image" content="<?= $site->ogimage()->toFile()->width(1200)->url() ?>"/>
		<?php endif ?>
	<?php endif ?>

	<meta itemprop="description" content="<?= $site->description()->html() ?>">
	<!-- <link rel="shortcut icon" href="<?php //url('assets/images/favicon.ico') ?>">
	<link rel="icon" href="<?php //url('assets/images/favicon.ico') ?>" type="image/x-icon"> -->

	<?php 
	echo css('assets/css/build/build.min.css');
	echo js('assets/js/vendor/modernizr.min.js');
	?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?= url('assets/js/vendor/jquery.min.js') ?>">\x3C/script>')</script>

	<?php if(!$site->customcss()->empty()): ?>
		<style type="text/css">
			<?php echo $site->customcss()->html() ?>
		</style>
	<?php endif ?>

</head>
<body>

<div class="loader"></div>

<div id="intro"><span class="ttu"><?= $site->title()->html() ?></span></div>

<header <?php if ($page->isHomepage()){echo 'data-home';} ?>>
	<div class="site-title">
		<span class="ttu"><a href="<?= $site->url() ?>"><?= $site->title()->html() ?></a></span>
	</div>
	<?php if ($page->isHomepage()): ?>
	<div class="menu">
			<span>
  				<a class="section-link" href="#<?= tagslug('à propos') ?>">À propos</a>
  			</span>

  			<span>
  				<a class="section-link" href="#<?= tagslug('pour qui?') ?>">Pour qui?</a>
  			</span>

  			<span>
  				<a class="section-link" href="#<?= tagslug($page->s2title()) ?>"><?= $page->s2title()->html() ?></a>
  			</span>

  			<span>
  				<a class="section-link" href="#<?= tagslug($page->s3title()) ?>"><?= $page->s3title()->html() ?></a>
  			</span>

  			<span>
  				<a class="section-link" href="#<?= tagslug($page->s4title()) ?>"><?= $page->s4title()->html() ?></a>
  			</span>

  			<span>
  				<a class="section-link" href="#<?= tagslug($page->s5title()) ?>"><?= $page->s5title()->html() ?></a>
  			</span>

  			<span>
  				<a class="section-link" href="#<?= tagslug($page->s6title()) ?>"><?= $page->s6title()->html() ?></a>
  			</span>

  			<span>
  				<a class="section-link" href="#<?= tagslug($page->ctitle()) ?>"><?= $page->ctitle()->html() ?></a>
  			</span>

  			<span>
  				<a class="section-link" href="#<?= tagslug($page->ttitle()) ?>"><?= $page->ttitle()->html() ?></a>
  			</span>
	</div>
	<?php endif ?>
</header>

<div id="container">