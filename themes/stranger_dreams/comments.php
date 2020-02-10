<div id="comments">
	<!-- Prevents loading the file directly -->
	<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
	    <?php die('Please do not load this page directly or we will hunt you down. Thanks and have a great day!'); ?>
	<?php endif; ?>
	
	<!-- Password Required -->
	<?php if(!empty($post->post_password)) : ?>
	    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	    <?php endif; ?>
	<?php endif; ?>
    
    <div id="thecomments">   
	<?php $i++; ?> <!-- variable for alternating comment styles -->
	<?php if($comments) : ?>
		<h2>Recent Comments</h2>
	    <ol>
	    <?php foreach($comments as $comment) : ?>
	    	<?php $comment_type = get_comment_type(); ?> <!-- checks for comment type -->
	    	<?php if($comment_type == 'comment') { ?> <!-- outputs only comments -->
		        <li id="comment-<?php comment_ID(); ?>" class="comment <?php if($i&1) { echo 'odd';} else {echo 'even';} ?> <?php $user_info = get_userdata(1); if ($user_info->ID == $comment->user_id) echo 'authorComment'; ?> <?php if ($comment->user_id > 0) echo 'user-comment'; ?>">
		            <?php if ($comment->comment_approved == '0') : ?> <!-- if comment is awaiting approval -->
		                <p class="waiting-for-approval">
		                	<em>Your comment is awaiting approval.</em>
		                </p>
		            <?php endif; ?>
                    <div class="comment-meta">
                    	<p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar($comment, '67'); } ?></p>
		            	<p>
							<?php comment_author_link(); ?><br /><?php comment_date('F j,Y'); ?><br /><?php comment_time('g:ja'); ?><br/><?php edit_comment_link('Edit Comment', '', ''); ?>
		            	</p>
		            </div><!--.commentMeta-->
		            <div class="comment-text">
			            <?php comment_text(); ?>
		            </div><!--.commentText-->
                    <div class="clear"></div> 
		        </li>
			<?php } else { $trackback = true; } ?>
	    <?php endforeach; ?>
	    </ol>
	    <?php if ($trackback == true) { ?><!-- checks for comment type: trackback -->
	    <h2>Trackbacks</h2>
		    <ol>
		    	<!-- outputs trackbacks -->
			    <?php foreach ($comments as $comment) : ?>
				    <?php $comment_type = get_comment_type(); ?>
				    <?php if($comment_type != 'comment') { ?>
					    <li><?php comment_author_link() ?></li>
				    <?php } ?>
			    <?php endforeach; ?>
		    </ol>
	    <?php } ?>
	<?php else : ?>
	<?php endif; ?>
   	</div>
    
    <div id="comments-form">
		<?php if(comments_open()) : ?>
		    <?php if(get_option('comment_registration') && !$user_ID) : ?>
		        <p>Our apologies, you must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		            <h2>Leave a comment</h2>
					<?php if($user_ID) : ?>
		                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
		            <?php else : ?>
		                <div class="item norm">
							<div class="field-l"><label for="author"><span>Your name</span></label></div>
							<div class="field-r"><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></div>
		                </div>
		                <div class="item norm">
		                	<div class="field-l"><label for="email"><span>Your email (not shown)</span></label></div>
		                	<div class="field-r"><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></div>
		                </div>
		                <div class="item norm">
                        	<div class="field-l"><label for="url"><span>Website (optional)</span></label></div>
                            <div class="field-r"><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></div>
                        </div>
		            <?php endif; ?>
		            <div class="item alt">
                            <div class="field-l"><label for="comment"><span>Comment</span></label></div>
                            <div class="field-r"><textarea name="comment" id="comment" cols="5" rows="6" tabindex="4"></textarea></div>
		            </div>
		          	<div class="item alt-sub">
                    	<div class="field-r"><input name="submit" type="submit" id="Submit" tabindex="5" value="submit" /></div>
		            	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		            </div>
		            <?php do_action('comment_form', $post->ID); ?>
		        </form>
		    <?php endif; ?>
		<?php else : ?>
		    <p>The comments are closed.</p>
		<?php endif; ?>
	</div><!--#commentsForm-->
	<div class="clear"></div> 
    
    
</div><!--#comments-->