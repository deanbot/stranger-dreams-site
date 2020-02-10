<?php get_header(); ?>
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
<?php get_footer(); ?>