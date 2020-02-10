<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	} elseif ( is_front_page() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	} elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title( ' | ', false, right ); bloginfo( 'name' );
	} ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="icon" href="<?php echo get_bloginfo('wpurl').TEMPLATE_PATH; ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
	<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/lessframework.css" /> -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/theme.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php if ( is_front_page() ) { ?>
    	<!-- Mailchimp styles -->
    	<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
		<style type="text/css">
        	#mc_embed_signup form { padding: 20px 0; }
			#mc_embed_signup input.email { border: 0px; width: 249px; min-width: 249px; text-indent: 10px; }			
			#mc_embed_signup input.button { width: 206px; min-width: 206px; }
			#mc_embed_signup div { float: left; }
			#mc_embed_signup div div { float:none; padding-right: 18px; }
			#mc_embed_signup input { color: #666; }
            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <!-- End Mailchimp styles -->
        <script type="text/javascript" src="/wp-content/themes/stranger_dreams/js/main.js"></script>
    <?php } ?>
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
</head>

<body class="error404">
<div class="hide">
	<p><a href="#content">Skip to Content</a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
</div><!--.hide-->
<div id="main"><!-- this encompasses the entire Web site -->
	<div id="header"><header>
		<div class="container">
			<div id="title">
            	<h1 id="logo"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); echo ": "; bloginfo('description'); ?>"><span><?php  ?></span></a></h1>
                <h2 id="tagline"><small><span><?php bloginfo('description'); ?></span></small></h2>
			</div><!--#title-->
			<div id="nav-primary" class="nav"><nav>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			</nav></div><!--#nav-primary-->
			<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
			<div class="clear"></div>
		</div><!--.container-->
	</header></div><!--#header-->
	<div class="container">