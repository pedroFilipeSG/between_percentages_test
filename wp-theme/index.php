<?php
/* alternative theme twentytwentyfour */
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php get_header(); ?>

	<?php get_template_part('navbar'); ?>
	<?php get_template_part('sidebar'); ?>
	<?php get_template_part('content'); ?>

	<?php wp_footer(); ?>

</body>
</html>