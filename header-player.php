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
<?php
		wp_register_script( 'videojs', get_stylesheet_directory_uri() . '/library/video.js/video.novtt.js', array(), '4.12.15', false );
		wp_enqueue_script( 'videojs' );

/* PATCH FOR CHROME DASH VIDEOJS PLAYING */

if( $detect->isChrome() && $detect->isMobile() ) {
		//wp_register_script( 'viblast', get_stylesheet_directory_uri() . '/library/viblast/viblast.js', array(), '6.11', false );
		//wp_enqueue_script( 'viblast' );
} else {
		wp_register_script( 'viblast', get_stylesheet_directory_uri() . '/library/viblast/viblast.js', array(), '6.11', false );
		wp_enqueue_script( 'viblast' );
}
		
		wp_enqueue_script( 'viblast' );
		
		
		wp_register_style( 'videojs-stylesheet', get_stylesheet_directory_uri() . '/library/video.js/video-js.min.css', array(), '4.12.15', 'all' );
		
		wp_enqueue_style( 'videojs-stylesheet' );
?>
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		
		
<script>(function($) {



function getData() {
	setTimeout(function () {
		$.ajax({
		  url: 'https://www.geekfaeries.fr/headbang-widget/fluxlist.json',
		  dataType:'JSON',
		  success:function(data){
			$.each(data, function(key, val){
				$("ul#preview-videos-list > li#"+val.index+" > a > h1").text(val.name);
				$("ul#preview-videos-list > li#"+val.index+" > a> p:first").text(val.currentContent);
				$("ul#preview-videos-list > li#"+val.index+" > a> p:last").text("A suivre : "+val.nextContent);
				if(val.active == "0") {
					console.log(val.active);
					$("ul#preview-videos-list > li#"+val.index+" > div").css("background-color","orange");
				} else {
					$("ul#preview-videos-list > li#"+val.index+" > div").css("background-color","green");
				};
			});
		  },
		  error:function(){
			console.log('fail');
		  },
		complete:getData
		});


	}, 1101);
};


	
$(document).ready(function(){
   getData('first');
});



})(jQuery);</script>
		
		
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage" style="overflow-x: hidden;">

		<div id="container">

<? if ( $detect->isMobile() or $detect->isTablet() ) { echo '<script>console.log("MobileDetect : isMobile or isTablet")</script>'; } else { echo '<script>console.log("MobileDetect : not isMobile or isTablet")</script>';
			
			?>

<? } ?>

		</div>

			</header>