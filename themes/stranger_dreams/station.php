<?php
/**
 *
 * @package WordPress
 * @subpackage stranger_dreams
 * Template Name: Station
 */
	if( isset($_POST["ticketCode"]) )
 { 
     //echo $_POST["ticketCode"]; 
     if( strtolower($_POST["ticketCode"]) == "mabel & waning range station" || strtolower($_POST["ticketCode"]) == "happy halloween")
     {
         wp_redirect( "/destination/beta-release/");
         exit;
     }
}
get_header(); ?>
<div id="station">
    <div id="content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                <article>
                    
                    <div class="post-content page-content">
                        <div id="page-title"><h1><?php the_title(); ?></h1></div>
                        <div id="train-man">
                            <form id="ticket" action="/station/" method="post">
                                <input id="ticketCode" name="ticketCode" type="text" value=""/>
                                <br/><br/>
                                <input type="image" id="stationSubmit" src="/wp-content/themes/stranger_dreams/images/station-submit.png" width="108" height="49" />
                            </form>
                        </div>
                        <div id="dialog"><?php
                                if( isset($_POST["ticketCode"]) )
                                { 
                                    //echo $_POST["ticketCode"]; 
                                    if( strtolower($_POST["ticketCode"]) == "mabel & waning range station" || strtolower($_POST["ticketCode"]) == "happy halloween")
                                    {
                                        wp_redirect( "/destination/beta-release/");
                                        exit;
                                    } else
                                    {
                                    
                                    ?>
                                    <img src="/wp-content/themes/stranger_dreams/images/train_man_no_good.png"/>
                                    <?php	
                                    }
                                } else
                                {
                                    ?>
                                    <img src="/wp-content/themes/stranger_dreams/images/train_man_where.png"/>
                                    <?php 
                                }
                            ?>
                        </div>
                    </div><!--.post-content .page-content -->
                </article>
            </div><!--#post-# .post-->
        <?php endwhile; ?>
    </div><!--#content-->
</div>
<?php get_footer(); ?>