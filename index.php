<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
                            
<?php
// **Loop 1** get the first sticky only 

$sticky = get_option( 'sticky_posts' );
rsort( $sticky );

$the_query = new WP_Query( 'p=' . $sticky[0]);

while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            
<?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), 'img-article-mea-index-1080'); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf main-page-posts article-mea' ); ?> role="article" style="background-image:url(<?php echo $imageData[0]; ?>); background-repeat:no-repeat; background-position: center 2.45em;">
                                
								<header class="article-header">
                                    <div id="cartouche-tag-date"><?php echo cartouche_event(get_the_category_list()); ?><br /><?php echo cartouche_annee(get_the_category_list()); ?></div>
									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                                                        <?php printf('%1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>
                                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="fulllink"></a>
								<section class="entry-content cf main-page-post-entry-content">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a>
								</section>

								<footer class="article-footer cf">
									<!-- <p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p> -->


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

                                </article>



<?php endwhile; wp_reset_postdata(); ?>


<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
        'posts_per_page' => 6,
        'ignore_sticky_posts' => 1,
	'paged' => $paged,
        'post__not_in' => array($sticky[0])

);

$super_query = new WP_Query($args);?>


                        <div id="articles-grid">

							<?php if (have_posts()) : while ($super_query->have_posts()) : $super_query->the_post(); ?>
                            
                            <?php $imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), 'img-article-index-1080'); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf main-page-posts' ); ?> role="article" style="background-image:url(<?php echo $imageData[0]; ?>); background-repeat:no-repeat; background-position: center 2.45em;">

								<header class="article-header">
                                    <div id="cartouche-tag-date"><?php echo cartouche_event(get_the_category_list()); ?><br /><?php echo cartouche_annee(get_the_category_list()); ?></div>
									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                                                                        <?php printf(' %1$s %2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>
                                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="fulllink"></a>
								<section class="entry-content cf main-page-post-entry-content">
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>
                            
                            </div>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
