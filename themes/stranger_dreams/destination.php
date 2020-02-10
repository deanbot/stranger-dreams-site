<?php
/**
 *
 * @package WordPress
 * @subpackage stranger_dreams
 * Template Name: Destination
 */
?>
<?php if(isset($_POST["station"])): ?>
<?php get_header(); ?>
    <div id="content">
    
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            
                <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                    <article>
                        <h1><?php the_title(); ?></h1>
                        <div class="post-content page-content">
                            <?php the_content(); ?>
                        </div><!--.post-content .page-content -->
                        <?php edit_post_link('<small>Edit this entry</small>','',''); ?>
                    </article>
                </div><!--#post-# .post-->
        
            <?php endwhile; ?>
    </div><!--#content-->
<?php else: ?>
	
    <?php get_template_part('404-header'); ?>
    <div id="content">
    	<div id="" class="hentry">
			<article>
				<h1>Error 404 Not Found</h1>
				<div class="post-content page-content">
					<p>Oops. Fail. The page cannot be found.</p>
					<p>Please check your URL or use the search form below.</p>
					<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
				</div><!--.post-content .page-content -->
			</article>
		</div><!--#post-# .post-->
        </div><!--#content-->
        <?php get_sidebar(); ?>
  <?php endif; ?>
<?php get_footer(); ?>