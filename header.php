<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Red+Rose&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<div class="main-wrapper">
<nav>
    <section id="desktop">
    <?php get_template_part('elements/nav/desktop', 'elem'); ?>
    </section>
    <section id="burger">
        <?php get_template_part('elements/nav/burger', 'elem'); ?>
    </section>
</nav>
<div class="content-grid">