<?php
/**
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.1
 */
?>

<?= get_sidebar( 'footer' );?>

			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress </a>

<?= wp_footer(); ?>
<script type="text/javascript" src="<?=bloginfo('template_directory');?>/assets/javascript/script-min.js"></script>
<script type="text/javascript" src="<?=bloginfo('template_directory');?>/javascript/jquery-1.6.2.min.js"></script>
</body>
</html>
