<? global $detect; ?>
                <div id="sidebar1" class="sidebar cf" role="complementary">
                    <?php
                    if ( is_active_sidebar( 'sidebar1' ) ) {
				        dynamic_sidebar( 'sidebar1' );
                        if ( $detect->isMobile() or $detect->isTablet() ) {
                            dynamic_sidebar( 'sidebar3' );
                        } else {
                            dynamic_sidebar( 'sidebar2' );
                        }

                    } else {

						
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
				    ?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

                    <?php } ?>

				</div>