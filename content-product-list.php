<?php
/**
 * The template used for displaying page content in page.php
 * modified for use in marketpress to display product-list
 * may be called by mp_category.php, mp_tag.php, etc.
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			mp_product_image( true, 'list' ); // 'list' because we want to link to product.
			the_excerpt();
			mp_product_meta( true, 'single' ); // 'single' because we want to show option price drop-down and add-to-cart button.
		?>

	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'catchbox' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
