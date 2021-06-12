<div class="blog4 widget">
              <div class="widget_title">
                <h3 class="title">Php & Mysqul</h3>
              </div>
              <div class="widget_content">
                <div class="grid_post_1 owl-carousel owl-theme">
                <?php 
                  $args = array(
                      'post_type'         => 'post',
                      'posts_per_page'    => -1,
                      'orderby'           => 'ASC',
                      'category_name'     => 'php and mysqul'
                  );
                  $post_limits = new WP_Query($args);
                  if($post_limits->have_posts()):
                      while($post_limits->have_posts()): $post_limits->the_post(); 
                ?>
                  <article class="grid_item post-hover item-0">
                    <div class="entry-image">
                      <a href="<?php the_permalink() ?>" class="entry-image-link">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="entry-header">
                        <h2 class="entry-title">
                          <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </h2>
                      <div class="entry-meta">
                        <span class="entry-author"><?php echo the_author_posts_link() ?></span>
                        <span class="entry-time"> <?php echo get_the_date('M-d-Y') ?></span>
                      </div>
                    </div>
                  </article>
                <?php endwhile; endif; ?>
                </div>
              </div>
            </div>