<?php
/**
 *Milestone Lite About Theme
 *
 * @package Milestone Lite
 */

//about theme info
add_action( 'admin_menu', 'milestone_lite_abouttheme' );
function milestone_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'milestone-lite'), __('About Theme Info', 'milestone-lite'), 'edit_theme_options', 'milestone_lite_guide', 'milestone_lite_mostrar_guide');   
} 

//guidline for about theme
function milestone_lite_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'milestone-lite'); ?></h3>
		   </div>
          <p><?php esc_html_e('milestone-lite is a Free Corporate WordPress theme. It is Perfect for all Corporate, Professional, personal, medical and any type of business. It is user friendly customizer options and Compatible in WordPress Latest Version. also Compatible with WooCommerce, Nextgen gallery ,Contact Form 7 and many WordPress popular plugins.','milestone-lite'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'milestone-lite'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'milestone-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'milestone-lite'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'milestone-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'milestone-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'milestone-lite'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'milestone-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'milestone-lite'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'milestone-lite'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
	<div class="gt-right">			
			<div>				
				<a href="<?php echo esc_url( MILESTONE_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'milestone-lite'); ?></a> | 				
				<a href="<?php echo esc_url( MILESTONE_LITE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'milestone-lite'); ?></a>
              
				<hr />  
                <ul>
                 <li><?php esc_html_e('Theme Customizer', 'milestone-lite'); ?></li>
                 <li><?php esc_html_e('Responsive Ready', 'milestone-lite'); ?></li>
                 <li><?php esc_html_e('Cross Browser Compatible', 'milestone-lite'); ?></li>
                 <li><?php esc_html_e('E-commerce', 'milestone-lite'); ?></li>
                 <li><?php esc_html_e('Contact Form 7 Plugin Compatible', 'milestone-lite'); ?></li>  
                 <li><?php esc_html_e('User Friendly', 'milestone-lite'); ?></li> 
                 <li><?php esc_html_e('Translation Ready', 'milestone-lite'); ?></li>
                 <li><?php esc_html_e('Many Other Plugins  Compatible', 'milestone-lite'); ?></li>   
                </ul>              
               
			</div>		
	</div><!-- .gt-right-->
    <div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>