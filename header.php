<?php $nome = get_bloginfo('name'); ob_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php 
			if (is_404()) {
				echo "Erro 404! Página não encontrada | ".get_bloginfo('name');
			} else {
				wp_title();
			}
		?>
	</title>	

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<?php $prefix_dir = 'http://localhost/projetos/jmconsultorios/wp-content/themes/jmconsultorios'; ?>
	<?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix_dir; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix_dir; ?>/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix_dir; ?>/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix_dir; ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix_dir; ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix_dir; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix_dir; ?>/css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $prefix_dir; ?>/css/main.css">
	<?php else: ?>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://jmconsultorios.com.br/wp-content/themes/jmconsultorios/assets/style.min.css">
	<?php endif; ?>

	
	<link rel="stylesheet" href="http://magnificodigital.com/assets/createdby/createdby.css" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.png">

	<?php wp_head(); ?>

</head>

<body <?php body_class() ?>>

<?php if (!is_page('contato')) : ?>
<header id="block-header-site" <?php if (!is_home()) : ?> class="page" <?php endif; ?>>
	<div class="container">
		<div class="row">

			<div class="col-lg-2 col-md-3 col-sm-3">
				<a href="<?php echo get_bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="block-logo"></a>
				<span class="menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></span>
			</div>

			<div class="col-lg-10 col-md-9 col-sm-9">
				<nav class="menu-site">
					<?php get_template_part('menu') ?>
				</nav>
			</div>
			
		</div>
	</div>
</header>
<?php endif; ?>