<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title single-project-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php //understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>


    <div class="meta-info">
        <div class="meta-info-container">
            <div class="project-industry">
                <h5>Industry</h5>
                <p>Telecom</p>
            </div>
            <div class="project-industry">
                <h5>Project Type</h5>
                <p>My own Project</p>
            </div>
            <div class="project-industry">
                <h5>Website</h5>
                <a href="#">Click to visit</a>
            </div>

        </div>
    </div>

	<div class="entry-content">

		<?php
		the_content();
		understrap_link_pages();
		
		?>

	</div><!-- .entry-content -->

    <div class="about-action">
    <div class="container">
        <div class="action-container">
            <h3 class="p-2">Let's work together</h3>
            <p class="p-2">At platea tortor consectetur morbi. Elit quam eget 
                cursus quam nibh pellentesque tincidunt morbi 
                suspendisse. Auctor tellus felis, sem est vel.
                 Lectus suspendisse fermentum eget in amet. 
                 Facilisis dignissim nulla 
                </p>
            <a class="p-2" href="#">
                Let's Talk
            </a>
        </div>
    </div>
</div>

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
