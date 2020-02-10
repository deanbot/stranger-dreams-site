<?php get_header(); ?>

<?php if ( !is_front_page() ): ?>

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
 
<div id="content">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
    <div id="game-holder">
    	<div class="shadow">
            <div id="game">
                <p>You need Flash installed to view this website.</p>
                <a href="http://www.adobe.com/go/getflashplayer">
                    <img src="/wp-content/themes/stranger_dreams/images/youNeedFlash.jpg" alt="Get Adobe Flash player" />
                </a>
            </div>
        </div>
        
   	</div>
    <div id="beta">
        <p style="color: #999; font-weight: bold;">Have a beta code? Head to <a href="/station/">the Station</a></p>
        </div>
    </div>
    <?php /*<div id="email-subscribe-form">
        <h2><a name="subscribe"></a><span>Subscribe to our mailing list</span></h2>
        <h3>Want to be notified on the date Stranger Dreams is released? Sign up on our mailing list.</h3>
    	<!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
            <form action="http://deanverleger.us2.list-manage.com/subscribe/post?u=1d24c2baae42ef1e17d527ba5&amp;id=cd33204198" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                <div><div><input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required></div></div>
                <div><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                <div class="clear"></div>
            </form>
        </div>
		<!--End mc_embed_signup-->
	</div>*/?>
    
	<?php endwhile; ?>
    
</div><!--#content-->

<?php endif; ?> 

<?php get_footer(); ?>