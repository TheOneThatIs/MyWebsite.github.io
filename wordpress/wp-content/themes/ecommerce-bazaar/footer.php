<?php
/**
 * The template for displaying the footer.
 *
 * @package Ecommerce Bazaar
 */

?>
	</div>
	<!-- Begin Footer Section -->
	<footer id="footer" class="ecommerce-bazaar-footer" itemscope itemtype="https://schema.org/WPFooter">
		<div class="container footer-widgets">
			<div class="py-3">
				<div class="footer-widgets-wrapper row">
	                <?php get_sidebar( 'footer' ); ?>
	            </div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container copyrights">
				<div class="row">
					<div class="footer-copyrights-wrapper">
						<?php
							/**
							 * Hook - ecommerce_bazaar_action_footer.
							 *
							 * @hooked ecommerce_bazaar_footer_copyrights - 10
							 */
							do_action( 'ecommerce_bazaar_action_footer' );
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="scrl-to-top">
			<?php if(get_theme_mod('ecommerce_bazaar_enable_scrolltop',false)=="1"){ ?>
	   			<a id="scrolltop" class="btntoTop"><i class="bi bi-arrow-up-short"></i></a>
	  		<?php } ?>
		</div>
    </footer>
	<?php wp_footer(); ?>
</body>