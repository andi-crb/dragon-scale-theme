<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>

	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead">
		<div class="container">
			<div class="blog-header">
				<?php echo "<img src=\"" . get_template_directory_uri() . "/scales.png\" class=\"right\">" ?>
				<h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
				<p class="lead blog-description">
					<?php echo get_bloginfo( 'description' ); ?>
				</p>
			</div>
			<nav class="blog-nav">
				<?wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'menu_class' ) ); ?>
			</nav>
		</div>
	</div>

	<div class="container main-container">
