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