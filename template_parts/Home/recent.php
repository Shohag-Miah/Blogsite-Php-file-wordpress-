<div class="recent_post_wrapper widget">
              <div class="widget_title">
                <h3 class="title">Recent Post</h3>
              </div>
              <div class="widget-content recent_widget_content" id="widget-content">
                  <?php 
                    $args = array(
                        'post_type'         => 'post',
                        'posts_per_page'    => 4,
                        'orderby'           => 'ASC'
                    );
                    $post_limits = new WP_Query($args);
                    if($post_limits->have_posts()):
                        while($post_limits->have_posts()): $post_limits->the_post(); 
                         
                  ?>
                    <article class="recent_post post-hover"  id="recent_post">
                      <div class="entry-image">
                        <span class="cat_name"><?php 
                            $cat = get_the_category();
                            foreach($cat as $category){
                                echo $category->name;
                            }
                        ?></span>
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
                        <div class="content">
                          <?php echo the_excerpts(29) ?> 
                        </div> 
                      </div>
                    </article>
                    
                
                <?php endwhile; endif; ?>
              </div>
              <div class="clearfix"></div>
              <div class="blog-pager">
                <a data-page="1" data-url="<?php echo admin_url('admin-ajax.php') ?>" id="load_more" class="loadmore-link text-center">
                  <i class="las la-sync-alt"></i>
                  <span class="text">Load More</span>
                </a>
              </div>
            </div>