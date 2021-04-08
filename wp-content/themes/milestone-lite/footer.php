<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Milestone Lite
 */
?>
<div id="footer-wrapper">
    	<div class="container">
            <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>             
               <?php endif; // end footer widget area ?>    
                        
               <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>                                  	
               <?php endif; // end footer widget area ?>   
            
               <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>                
               <?php endif; // end footer widget area ?>  
              
               <?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>                 
               <?php endif; // end footer widget area ?>    
                
                
            <div class="clear"></div>
        </div><!--end .container-->
        
        <div class="copyright-wrapper">
        	<div class="container">
            	<div class="copyright-txt">
					<?php bloginfo('name'); ?>. <?php esc_html_e('All Rights Reserved', 'milestone-lite');?>           
                </div>
                <div class="design-by">
				 <?php esc_html_e('Proudly Powered by WordPress','milestone-lite'); ?>    
                </div>
                 <div class="clear"></div>
            </div>           
        </div>        
    </div>
</div><!--#end sitewrapper-->
<?php wp_footer(); ?>
</body>
</html>