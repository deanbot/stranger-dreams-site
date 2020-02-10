<?php get_header(); ?>
	<div id="content">
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
                            <?php the_content(__('Read more'));?>
                        </div>
                      <div class="post-meta meta-sub">
                            <p>
                                Category: <?php the_category(', ') ?>
                                <br/>
                                <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                                <br/>
                                <div style="padding-top:20px;">
                                    <div class="social-item"><iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink();?>&amp;send=false&amp;layout=button_count&amp;width=105&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21&amp;appId=190878857652812" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:105px; height:21px;" allowTransparency="true"></iframe></div>
                                    <div class="social-item"><g:plusone size="medium" href="<?php the_permalink(); ?>"></g:plusone></div>
                                    <div class="social-item"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink();?>" data-text="<?php the_title();?>" data-count="horizontal" data-via="stranger_dreams">Tweet</a></div>
                                    <div class="social-item"><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?>&media=http%3A%2F%2Fstrangerdreams.net%2Fwp-content%2Fuploads%2F2012%2F03%2Flogo_black_large.png&description=Stranger%20Dreams%3A%20%E2%80%9CThe%20Watch%E2%80%9D%20is%20an%20independent%2C%20mystery%2C%20point-and-click%20adventure%20game%20created%20by%20Jackie%20Crofts%20and%20Dean%20Verleger%20of%20Dreamfed%20Games.%20%0A%0AFate%20and%20arresting%20dreams%20have%20brought%20you%2C%20an%20ex-detective%2C%20to%20the%20small%20town%20of%20Mabel%20to%20investigate%20a%20string%20of%20bizarre%20murders.%20A%20brave%20heart%20and%20a%20keen%20mind%20aren%E2%80%99t%20the%20only%20things%20you%E2%80%99ll%20need%20as%20you%20venture%20to%20solve%20the%20mystery%20of%20the%20murders%20and%20your%20dreams%0A-%20Observation%20and%20following%20your%20instincts%20are%20a%20necessity." class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></div>
                                    
                                    <div class="clear"></div>
                                </div>
                            </p>
                        </div><!--.postMeta-->
                    </div>
                    <div id="page-bottom-holder">
                        <div id="page-bottom-fade"></div>
                        <div id="page-bottom-wrap">
                            <div id="page-bottom"></div>
                        </div>
                    </div>
            	</div>
                
                <?php comments_template( '', true ); ?>
                
			</div><!--.post-single-->
            
        	<?php /* If a user fills out their bio info, it's included here ?>
			<div id="post-author">
				<h3>Written by <?php the_author_posts_link() ?></h3>
				<p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '80' ); /* This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address */  /* } ?></p>
				<div id="authorDescription">
					<?php the_author_meta('description') ?> 
					<div id="author-link">
						<p>View all posts by: <?php the_author_posts_link() ?></p>
					</div><!--#author-link-->
				</div><!--#author-description -->
			</div><!--#post-author--><?php */  ?>
		<?php endwhile; else: ?>
			<div class="no-results">
				<h2>Coming Soon...</h2>
			</div><!--noResults-->
		<?php endif; ?>
       	
		<div class="newer-older">
			<div class="older">
				<p>
					<?php previous_post_link('%link', '&laquo; Previous post') ?>
				</p>
			</div><!--.older-->
			<div class="newer">
				<p>
					<?php next_post_link('%link', 'Next Post &raquo;') ?>
				</p>
			</div><!--.older-->
		</div><!--.newer-older-->

	</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>