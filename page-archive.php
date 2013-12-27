<?php
/**
 * The template used for displaying Archive page content
 * Template Name: Archives
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>

						<?php get_search_form(); ?>

						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						<div class="widget">
							<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'independent_publisher' ); ?></h2>
							<ul>
								<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
							</ul>
						</div>
						<!-- .widget -->

						<?php the_widget( 'WP_Widget_Archives', 'dropdown=1' ); ?>

						<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'publish' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

					<?php edit_post_link( __( 'Edit', 'publish' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
				</article><!-- #post-<?php the_ID(); ?> -->


			<?php endwhile; // end of the loop. ?>

		</div>
		<!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>