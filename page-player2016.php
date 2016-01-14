<?php
/*
 Template Name: Page player2016
 */


get_header('player'); ?>

<div id="content" class="row otw2016 otw2016-nomaxwidth">
<!--<div id="inner-content" class="wrap cf row">-->

<div class="hide-for-small-only medium-2 large-7 columns">text côté</div>
<div class="small-24 medium-20 large-10 columns" style="margin-bottom:15px">				
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
					<div class="small-24 columns" style="margin-top:30px;">
						<iframe id="ask-widget" class="box-glow-purple" width="100%" border="0" scrolling="no" allowTransparency="true" src="https://www.geekfaeries.fr/headbang-widget/questionwidget.php?fluxid=1"></iframe>
					</div>
					<div class="small-24 columns" style="margin-top:30px;">
			<?php the_post(); ?>
					<div id="articleplayer-widget" class="box-glow-purple">
						<?php the_content();?>
						</div>
					</div>
				</div>
		</div>

<div class="small-24 small-centered medium-20 medium-centered large-uncentered large-7 columns">
		<iframe id="twitter-widget" class="box-glow-purple" src="https://www.geekfaeries.fr/twitter-widget/public/index.php" width="100%" style="//max-width: 465px;" height="115" border="0" scrolling="no" allowTransparency="true"></iframe>

			<?php if( !$detect->isMobile() ){ ?>
		<iframe src="https://kiwiirc.com/client?settings=0ac71168907532e3ad152074ba441a33" class="box-glow-purple" style="border:0; width:100%; height:654px; margin-top: 30px;"></iframe>
			<?php } else { ?>
			<?php } ?>
	</div>
				<!--</div>-->

			

<?php get_footer('player'); ?>
