<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Advance Automobile
 */
?>

<footer role="contentinfo">
  <?php //Set widget areas classes based on user choice
    $advance_automobile_widget_areas = get_theme_mod('advance_automobile_footer_widget_areas', '4');
    if ($advance_automobile_widget_areas == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($advance_automobile_widget_areas == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($advance_automobile_widget_areas == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
  ?>
  <div id="footer" class="copyright-wrapper">
    <div class="container">
      <div class="row">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-1'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-2'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-3'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
          <div class="sidebar-column <?php echo ( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-4'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="copyright p-3 text-center">
    <p class="mb-0"><?php advance_automobile_credit(); ?> <?php echo esc_html(get_theme_mod('advance_automobile_footer_copy', __('By Themeshopy', 'advance-automobile')));?></p>
  </div>
</footer>
<?php if( get_theme_mod( 'advance_automobile_enable_disable_scroll',true) != '' || get_theme_mod( 'advance_automobile_responsive_scroll',true) != '') { ?>
  <?php $advance_automobile_theme_lay = get_theme_mod( 'advance_automobile_scroll_setting','Right');
    if($advance_automobile_theme_lay == 'Left'){ ?>
      <button id="scroll-top" class="left-align" title="<?php esc_attr_e('Scroll to Top','advance-automobile'); ?>"><span class="fas fa-chevron-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'advance-automobile'); ?></span></button>
    <?php }else if($advance_automobile_theme_lay == 'Center'){ ?>
      <button id="scroll-top" class="center-align" title="<?php esc_attr_e('Scroll to Top','advance-automobile'); ?>"><span class="fas fa-chevron-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'advance-automobile'); ?></span></button>
    <?php }else{ ?>
      <button id="scroll-top" title="<?php esc_attr_e('Scroll to Top','advance-automobile'); ?>"><span class="fas fa-chevron-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'advance-automobile'); ?></span></button>
  <?php }?>
<?php }?>

<?php wp_footer();?>
</body>
</html>