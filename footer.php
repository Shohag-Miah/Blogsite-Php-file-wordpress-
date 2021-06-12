
    <div class="clearfix"></div>
    <footer>
    <a href="javascript:;" class="back-top"></a>
      <div class="container">
        <div class="footer-section">
          <div class="row">
            <div class="col-md-3">
              <div class="footer_widget_1 footer_widget">
                <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_widget_1 footer_widget">
                <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_widget_1 footer_widget">
                <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="linklist">
                <h2 class="footer-title">Follow Us</h2>
                <ul>
                    <li class="facebook"><a href="<?php  the_author_meta('facebook_url') ?>"><i class="lab la-facebook-f"></i></a></li>
                  
                  <li class="twitter-t"><a href="<?php  the_author_meta('twitter_url') ?>"><i class="lab la-twitter"></i></a></li>
                  <li class="instagram"><a href="<?php  the_author_meta('instagram_url') ?>"><i class="lab la-instagram"></i></a></li>
                  <li class="youtube"><a href="<?php  the_author_meta('youtube_url') ?>"><i class="lab la-youtube"></i></a></li>
                </ul>
              </div>
            </div>

          </div>
          
        </div>
      </div>
        <div class="copyright-section">
          <div class="container">
            <div class="copyright-text">
              <p class="">Copyright &copy; 2020-<?php echo get_the_date('Y') ?> <?php echo get_theme_mod('copyright_text') ?></p>
            </div>
            <div class="quick-links">   
            <?php 
            $args = array(
              'theme_options' => 'footer_menu',
              'items_wrap'        => '<ul class="footer-navbar">%3$s</ul>'
            );
            wp_nav_menu( $args );
          ?>
            </div>
          </div> 
        </div>
    </footer>
    
  <?php wp_footer() ; ?>
  </body>
</html>

