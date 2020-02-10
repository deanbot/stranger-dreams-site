<?php
/**
 *
 * @package WordPress
 * @subpackage stranger_dreams
 * Template Name: Media
 */

get_header(); ?>
<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
			<article id="media">
				<h1><?php the_title(); ?></h1>
                <div class="post-content page-content">
               		<?php the_content(); ?>
					<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
                </div><!--.post-content .page-content -->

                <h2>Concept Art</h2>
                <?php 
					$the_query = new WP_Query( 'pagename=concept-art' );
					while ( $the_query->have_posts() ) : $the_query->the_post(); 
				?>
				<div class="post-content page-content">	
					<?php the_content(); ?>
				</div><!--.post-content .page-content -->
                <?php endwhile; wp_reset_query(); ?>
                
                <?php /*
                <h2>Wallpapers</h2>
                <?php //query_posts( 'id=23'); 
					//if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="post-content page-content">
                	<?php edit_post_link('<small>Edit this entry</small>','',''); ?>
					<?php the_content(); ?>
				</div><!--.post-content .page-content -->
                <?php //endwhile; */?>
                
			</article>
		</div><!--#post-# .post-->
	<?php endwhile; ?>
</div><!--#content-->
<?php get_footer(); ?>