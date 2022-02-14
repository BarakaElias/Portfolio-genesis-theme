<?php
/**
 * Template for displaying posts on the author archive
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<div class="project">
		<div class="project-image">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>
		<div class="project-info p-5">
			<a href="<?php the_permalink(); ?>" class="stretched-link"></a>
			<h5 class="project-category">CLIENT<h5>
			
			<?php
				the_title(
				sprintf( '<h3 class="entry-title project-title"><a class="strecthed-link " href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h3>'
				);
			?>
			<p class="project-description"><?php the_excerpt(); ?></p>
			<div class="project-tools">
				<h5>VSCODE</h5>
				<h5>WORDPRESS</h5>
				<h5>UNDERSTRAP</h5>
			</div>
			<div class="project-links">
				<a href="https://www.google.com/"><i class="fa fa-github"></i></a>
				<a href="#"><i class="fa fa-external-link"></i></a>
			</div>
		</div>
		
	</div>

	

	

	

</article><!-- #post-## -->
