<?php
/**
 * @package Ecommerce Bazaar
 */

//Return if the first widget area has no widgets
if ( !is_active_sidebar( 'footer-1' ) ) {
	return;
} ?>

<?php //user selected widget columns

	$ecommerce_bazaar_widget_num = esc_html(get_theme_mod('ecommerce_bazaar_footer_widgets', '4'));
	
	if ($ecommerce_bazaar_widget_num == '4') :
		$col1 ='col-md-3';
		$col2 ='col-md-3';
		$col3 ='col-md-3';
		$col4 ='col-md-3';
	elseif ($ecommerce_bazaar_widget_num == '3') :
		$col1 ='col-md-4';
		$col2 ='col-md-4';
		$col3 ='col-md-4';
		
	elseif ($ecommerce_bazaar_widget_num == '2') :
		 $col1 ='col-md-6';
		 $col2 ='col-md-6';
	else :
		$col1 ='col-md-12';
	endif;
?>
		
<?php 
	if ( is_active_sidebar( 'footer-1' ) && ( $ecommerce_bazaar_widget_num == '4' || $ecommerce_bazaar_widget_num == '3' || $ecommerce_bazaar_widget_num == '2' || $ecommerce_bazaar_widget_num == '1')) :
		?>
			<div class="widget-column px-3 <?php echo esc_attr($col1); ?>">
				<?php dynamic_sidebar( 'footer-1'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-2' ) && ( $ecommerce_bazaar_widget_num == '4' || $ecommerce_bazaar_widget_num == '3' || $ecommerce_bazaar_widget_num == '2')) :
		?>
			<div class="widget-column px-3 <?php echo esc_attr($col2); ?>">
				<?php dynamic_sidebar( 'footer-2'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-3' ) && ( $ecommerce_bazaar_widget_num == '4' || $ecommerce_bazaar_widget_num == '3' )) :
		?>
			<div class="widget-column px-3 <?php echo esc_attr($col3); ?>">
				<?php dynamic_sidebar( 'footer-3'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-4' ) && ( $ecommerce_bazaar_widget_num == '4' )) :
		?>
			<div class="widget-column px-3 <?php echo esc_attr($col4); ?>">
				<?php dynamic_sidebar( 'footer-4'); ?>
			</div>
		<?php
	endif;
?>