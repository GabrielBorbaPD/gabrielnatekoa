<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>
<body>
<?php if (is_front_page()): ?>
	<div class="header">
		<?php include 'menu.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="imagem_inicial">
						<?php if( get_field('imagem_de_cabeçalho') ): ?>
	    					<img src="<?php the_field('imagem_de_cabeçalho'); ?>">
						<?php endif; ?>
					</div>
				</div>
				<div class="col">
					<div class="chamada_inicial">
						<?php if( get_field('titulo_(chamada)') ): ?>
    						<h1><?php the_field('titulo_(chamada)'); ?></h1>
						<?php endif; ?>
						<?php if( get_field('descrição') ): ?>
    						<p><?php the_field('descrição'); ?></p>
						<?php endif; ?>
						<button type="button" class="btn btn-success btn-lg">SABER MAIS</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php else: ?>
		<?php include 'menu.php'; ?>
		<div class="container">
			<div class="title"><?php the_title(); ?></div>
			<div class="breadcrumb"><?php wp_custom_breadcrumbs(); ?></div>
			<div class="clear"></div>
		</div>
<?php endif; ?>