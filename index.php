    <?php
    get_header(); ?>
    <!-- Featured Post Here -->
    <div class="featured-wrapper">
      <div class="container">
        <div class="featured-content category-wise">

        <?php 
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 1,
                'orderby'             => 'rand',
                'category_name'     => 'editor'
            );
            $post_limits = new WP_Query($args);
            if($post_limits->have_posts()):
                while($post_limits->have_posts()): $post_limits->the_post(); 
        ?>

          <article class="featured-item post-hover item-0">
            <div class="featured-inner">
              <div class="entry-image">
                <a href="<?php the_permalink() ?>" class="entry-image-link"> 
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                </a>
                <span class="cat_name">
                <?php 
                    $cat = get_the_category();
                    foreach($cat as $category){
                        echo $category->name;
                    }
                ?>
                </span>
                <div class="entry-info">
                  <h3 class="entry-title">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                  </h3>
                  <div class="entry-meta">
                    <span class="entry-author"><?php echo the_author_posts_link() ?></span>
                    <span class="entry-time"> <?php echo get_the_date('M-d-Y') ?></span>
                  </div>
                </div>
              </div>
            </div>
          </article>
        <?php 
            endwhile; endif;
        ?>

        <?php 
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 1,
                'orderby'             => 'rand',
                'category_name'     => 'web design'
            );
            $post_limits = new WP_Query($args);
            if($post_limits->have_posts()):
                while($post_limits->have_posts()): $post_limits->the_post(); 
        ?>
          <article class="featured-item post-hover item-1">
            <div class="featured-inner">
              <div class="entry-image">
                <a href="<?php the_permalink() ?>" class="entry-image-link"> 
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                </a>
              </div>
              <span class="cat_name">
              <?php 
                    $cat = get_the_category();
                    foreach($cat as $category){
                        echo $category->name;
                    }
                ?>
              </span>
              <div class="entry-info">
                <h3 class="entry-title">
                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h3>
                <div class="entry-meta">
                    <span class="entry-author"><?php echo the_author_posts_link() ?></span>
                    <span class="entry-time"> <?php echo get_the_date('M-d-Y') ?></span>
                </div>
              </div>
            </div>
          </article>
          <?php 
            endwhile; endif;
         ?>

         <?php 
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 1,
                'orderby'             => 'rand',
                'category_name'     => 'php and mysqul'
            );
            $post_limits = new WP_Query($args);
            if($post_limits->have_posts()):
                while($post_limits->have_posts()): $post_limits->the_post(); 
        ?>
          <article class="featured-item post-hover item-2">
            <div class="featured-inner">
              <div class="entry-image">
                <a href="<?php the_permalink() ?>" class="entry-image-link"> 
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                </a>
              </div>
              <span class="cat_name">
              <?php 
                    $cat = get_the_category();
                    foreach($cat as $category){
                        echo $category->name;
                    }
                ?>
              </span>
              <div class="entry-info">
                <h3 class="entry-title">
                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h3>
                <div class="entry-meta">
                    <span class="entry-author"><?php echo the_author_posts_link() ?></span>
                    <span class="entry-time"> <?php echo get_the_date('M-d-Y') ?></span>
                </div>
              </div>
            </div>
          </article>
          <?php 
            endwhile; endif;
         ?> 

        <?php 
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 1,
                'orderby'             => 'rand',
                'category_name'     => 'wordpress'
            );
            $post_limits = new WP_Query($args);
            if($post_limits->have_posts()):
                while($post_limits->have_posts()): $post_limits->the_post(); 
        ?>
          <article class="featured-item post-hover item-3">
            <div class="featured-inner">
              <div class="entry-image">
                <a href="<?php the_permalink() ?>" class="entry-image-link"> 
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                </a>
              </div>
              <span class="cat_name">
              <?php 
                    $cat = get_the_category();
                    foreach($cat as $category){
                        echo $category->name;
                    }
                ?>
              </span>
              <div class="entry-info">
                <h3 class="entry-title">
                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h3>
                <div class="entry-meta">
                    <span class="entry-author"><?php echo the_author_posts_link() ?></span>
                    <span class="entry-time"> <?php echo get_the_date('M-d-Y') ?></span>
                </div>
              </div>
            </div>
          </article>
          <?php 
            endwhile; endif;
         ?>

        </div>
      </div>
    </div>
    <div class="content_wrapper">
      <div class="container">
      <!-- Right Content here -->
        <main class="main_content_wrapper">
          <div class="blog_posts">
            
            <!-- Blog Section One -->
            <div class="blog1 widget">
              <div class="widget_title">
                <h3 class="title">Css Button</h3>
              </div>
              <div class="widget_content">
                <div class="grid_post_1 owl-carousel owl-theme">
                <?php 
                  $args = array(
                      'post_type'         => 'post',
                      'posts_per_page'    => 3,
                      'orderby'           => 'ASC',
                      'category_name'     => 'css button'
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

            <!-- Blog Section Two -->
            <div class="blog2 widget">
              <div class="widget_title">
                <h3 class="title">Web Design</h3>
              </div>
              <div class="widget_content ">
                <div class="grid_post_1 owl-carousel owl-theme">
                <?php 
                  $args = array(
                      'post_type'         => 'post',
                      'posts_per_page'    => -1,
                      'orderby'           => 'ASC',
                      'category_name'     => 'web design'
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
                        <span class="entry-author"><?php the_author_link() ?></span>
                        <span class="entry-time"> <?php echo get_the_date('M-d-Y') ?></span>
                      </div>
                    </div>
                  </article>
                
                  <?php endwhile; endif; ?>
                </div>
              </div>
            </div>

            <!--  Recent Post -->
            <div class="recent_post_wrapper widget">
              <div class="widget_title">
                <h3 class="title">Recent Post</h3>
                <a href="" class="more">Show more</a>
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

            <!-- BLog section  Three -->
            <div class="blog3 widget">
              <div class="widget_title">
                <h3 class="title">WordPress</h3>
              </div>
              <div class="widget_content ">
                <div class="grid_post_1 owl-carousel owl-theme">
                <?php 
                  $args = array(
                      'post_type'         => 'post',
                      'posts_per_page'    => -1,
                      'orderby'           => 'ASC',
                      'category_name'     => 'wordpress'
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
                        <span class="entry-author"><?php the_author_link() ?></span>
                        <span class="entry-time"> <?php echo get_the_date('M-d-Y') ?></span>
                      </div>
                    </div>
                  </article>
                
                  <?php endwhile; endif; ?>
                </div>
              </div>
            </div>

            <!-- Blog section Four -->
            <div class="blog4 widget">
              <div class="widget_title">
                <h3 class="title">Php & Mysqul</h3>
              </div>
              <div class="widget_content">
                <div class="grid_post_1 owl-carousel owl-theme">
                <?php 
                  $args = array(
                      'post_type'         => 'post',
                      'posts_per_page'    => 3,
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
          </div> <!-- blog_posts -->
        </main><!--  .main_content_wrapper -->

        <!-- Sidebar Here -->
        <?php get_sidebar(); ?>
      </div>
    </div>

    <?php get_footer(); ?>