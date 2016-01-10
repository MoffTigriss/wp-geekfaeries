<? global $detect; ?>
<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#603cba">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/favicon-144.png">
        <meta name="application-name" content="Geek Faëries">
        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf row">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>
<? if ( $detect->isMobile() or $detect->isTablet() ) { echo ''; } else {?>
                    <p id="fb" class="small-18 columns"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FGeekFaeries&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font=verdana&amp;colorscheme=dark&amp;action=like&amp;height=35" style="border:none; overflow:hidden; width:450px; height:25px;padding-top: 6px;"></iframe></p>
                    <ul class="soc small-4 columns" id=social>
                        <li><a class="soc-twitter" href="https://twitter.com/GeekFaeries"></a></li>
                        <li><a class="soc-facebook" href="https://www.facebook.com/GeekFaeries"></a></li>
                        <li><a class="soc-youtube" href="https://www.youtube.com/user/StudioAffects"></a></li>
                        <li><a class="soc-google soc-icon-last" href="https://plus.google.com/u/0/+GeekFaeriesFr"></a></li>
                    </ul>
<? } ?>

				</div>

			</header>
            
            <nav role="navigation" id="top-nav-editions" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array(
                         'container' => false,                           // remove nav container
                         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                         'menu' => __( 'Cartouches éditions à venir', 'wp-geekfaeries' ),  // nav name
                         'menu_class' => 'nav-editions top-nav cf',               // adding custom nav class
                         'theme_location' => 'editions',                 // where it's located in the theme
                         'before' => '',                                 // before the menu
                           'after' => '',                                  // after the menu
                           'link_before' => '',                            // before each link
                           'link_after' => '',                             // after each link
                           'depth' => 0,                                   // limit the depth of the nav
                         'fallback_cb' => '',                             // fallback function (if there is one)
                        'reverse' => false
                )); ?>

            </nav>
            
            <div id="banniere-cont">
				<a href="<?php bloginfo('url'); ?>/"><img id="banniere-logo" src="<?php echo get_template_directory_uri();?>/library/images/2015_logo-gf.png" title="Geek Faëries" alt="Logo Geek Faëries"></a>
				<a href="<?php bloginfo('url'); ?>/"><div id="banniere-image"></div></a>
			</div>