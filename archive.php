<?php get_header() ?>
<div class="container">
    <div class="breadcrumbs_content">
        <?php echo get_breadcrumb() ?>
    </div>
</div>
<div class="content_wrapper">
  <div class="container">
    <main class="main_content_wrapper">
      <div class="blog_posts">
        <div class="loadmore_page widget">
          <div class="widget_title">
          <h3 class="title">
            <?php if(is_category()){  _e('Show search label for ')  ?>'<?php echo single_cat_title();  ?>'
          <?php } elseif (is_tag()) { ?>

            <?php _e('Show search label for ') ?> '<?php echo single_cat_title(); ?>'
            
           <?php }elseif (is_day()) { ?>

            <?php _e('Show search label for ') ?> '<?php echo the_time('F-j-Y') ?>'
             
           <?php } elseif (is_month())  { ?>

            <?php _e('Show search label for ') ?> '<?php echo the_time('F-Y'); ?>'

          <?php } elseif (is_year())  { ?>

            <?php _e('Show search label for ') ?> '<?php echo the_time('Y'); ?>'
             
           <?php } elseif (is_author())  { ?>

          <?php _e('Show search label for ') ?> '<?php echo get_the_author_nickname(  ); ?>'
          
          <?php } ?>

          </h3>
          
          </div>
          <div class="widget-content">
            <?php 
                if(have_posts()):
                  while (have_posts()): the_post();
                      
             ?>
            <article class="recent_post post-hover">
              <div class="entry-image">
                <span class="cat_name"><?php $cat = get_the_category();
                foreach($cat as $category){
                    echo $category->name;} ?></span>
                <a href="" class="entry-image-link">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                </a>
              </div>
              <div class="entry-header">
                <h2 class="entry-title">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h2>
                <div class="entry-meta">
                    <span class="entry-author"><?php the_author_link() ?></span>
                    <span class="entry-time"> <?php echo get_the_date('F-d-Y') ?></span>
                </div>
                <p class="entry-excerpt excerpt"><?php echo the_excerpts('28') ?></p>
              </div>
            </article>
          <?php endwhile;
            else :
              get_template_part('template_part/content/content-none');
            
          endif; ?>
          </div>
          <div class="clearfix"></div>
          <div class="blog-pager">
            <?php the_posts_pagination() ?>
          </div>
        </div>
      </div>
    </main>
    <?php get_sidebar() ?>
  </div>
</div>

<?php get_footer() ?>