<!-- header content -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?=wp_title( '', false, 'right' );?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<div class='top-header'>
<div class='container '>
	<div class='row'>
		<div class='col-md-6'>
			<img src="<?=get_bloginfo('template_directory');?>/images/logo-retina.png" />
		</div>
		<div class='col-md-6 top-header-2'>
			<div>
				<div class="form-group">
					<label class="sr-only" for="search-data">Amount (in dollars)</label>
					<div class="input-group">
						<div class="input-group-addon"><i class='fa fa-search'></i></div>
						<input type="text" class="form-control" id="search-data" placeholder="search...">
					</div>
				</div>
			</div>
			<h4 id="slogan">Fairfield University Computer Science</h4>
		</div>
	</div>
</div>
</div>

<nav class="navbar navbar-default main-nav">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				aria-expanded="false">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav header-nav-ul">				
				<?=wp_nav_menu([
					'menu' => 'main_navigation',
					'depth' => 0
				])?>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<?php 
	if (is_home() || is_front_page()):
?>
		<div class="top-slider">
			<?php 
			    echo do_shortcode("[metaslider id=18]"); 
			?>
		</div>	
		<div id="panel-tabs"></div>
 <?php
    endif;
?>

<?php 
	if (is_home() || is_front_page()):
 		the_ad(21);
    endif;
?>
