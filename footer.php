			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">
                    
                    <a href="http://www.chateau-selles-sur-cher.com/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/footer-chateau.png" alt="Château de Selles-sur-Cher"></a>
					<a href="http://www.mutinerie.org/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/footer-mutinerie.png" alt="Espace de coworking Mutinerie"></a>

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; 2009-<?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - <a href="/contact/">Nous contacter</a></p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>