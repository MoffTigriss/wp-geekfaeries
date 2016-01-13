<?php
/*
 Template Name: Page player2016
 */


get_header('player'); ?>

<div id="content" class="row otw2016 otw2016-nomaxwidth">
<!--<div id="inner-content" class="wrap cf row">-->

<div class="small-0 medium-2 large-7 columns">text côté</div>
<div class="small-24 medium-20 large-10 columns">				
		<div class="row">
					<div class="small-24 columns video-js-responsive-container vjs-hd">


						<video id="player2016" class="video-js vjs-default-skin box-glow-purple" data-viblast-key="AnyYn3dlzJ" controls poster="MY_VIDEO_POSTER.jpg" data-setup="{}" loop preload="none">

						<?php if( $detect->isiOS() ){ ?>
        <source src="https://space.imin.space/live/out_flux1/playlist.m3u8" type='application/x-mpegURL'>
						<?php } else { ?>
        <source src="https://space.imin.space/live/out_flux1/manifest.mpd" type='application/dash+xml'>
						<?php } ?>
    </video>

					</div>
					<div class="row">texte</div>
		</div>
		<div class="small-24 medium-6 large-7 columns" style="text-align:right;">
			<iframe id="twitter-widget" class="box-glow-purple" src="https://www.geekfaeries.fr/twitter-widget/public/index.php" width="465" height="115" border="0" scrolling="no" allowTransparency="true"></iframe>
		</div>

	
	
						<main id="main" class="cf fix-vierge" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf post-page-article fix-vierge' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header entry-header">

									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

									<p class="byline vcard">
										<?php printf( __( 'Posted', 'bonestheme').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '.__( 'by',  'bonestheme').' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

						<?php //get_sidebar(); ?>
				</div>
	<div class="large-7 columns">text côté</div>
				<!--</div>-->

			</div>

<?php get_footer(); ?>
