<?php get_header(); ?>
<div id="content" class="search">

	<div class="hentry"><h1>Browsing Results for: "<?php the_search_query(); ?>"</h1></div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<div class="post-single">
            	<div class="journal-page">
                    <div id="page-top-holder">
                        <div id="page-top"></div>
                        <div id="page-top-wrap">
                            <div id="page-top-fade"></div>
                        </div>
                    </div>
                    <div id="page-middle">
                        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        <div class="post-meta">
                            <p>
                                Posted: <?php the_date(); ?> by <?php the_author(); //the_author_posts_url() ?>
                            </p>
                        </div>
                        <?php /* if ( has_post_thumbnail() ) { 
		// loades the post's featured thumbnail, requires Wordpress 3.0+ 
		echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } */?>
                        <div class="post-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div id="page-bottom-holder">
                        <div id="page-bottom-fade"></div>
                        <div id="page-bottom-wrap">
                            <div id="page-bottom"></div>
                        </div>
                    </div>
            	</div>
			</div><!--.post-single-->
		
	<?php endwhile; else: ?>
		<div class="no-results">
			<h2>No Results</h2>
			<p>Please feel free try again!</p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--no-results-->
	<?php endif; ?>

	<nav class="oldernewer">
		<div class="older">
			<p>
				<?php next_posts_link('&laquo; Older Entries') ?>
			</p>
		</div><!--.older-->
		<div class="newer">
			<p>
				<?php previous_posts_link('Newer Entries &raquo;') ?>
			</p>
		</div><!--.older-->
	</nav><!--.oldernewer-->
	
</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>