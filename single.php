<?php get_header() ?>

<div class="content_wrapper">
  <div class="container">
    <main class="main_content_wrapper">
      <div class="single_post_wrapper">
        <?php 
          if(have_posts()):
            while (have_posts()): the_post();
         ?>
        <div class="item-post-padd">
          <div class="item-header">
            <div class="breadcumbs">
              <?php echo get_breadcrumb()?>
            </div>
            <div class="post-title">
              <h2><?php the_title() ?></h2>
            </div>
            <div class="entry-meta">
              <span class="entry-author"><?php the_author_posts_link() ?></span>
              <span class="entry-time"> <?php echo get_the_date('M-d-Y') ?></span>
              <span class="entry-comments-link"> <a href=""><?php comments_popup_link('No Comments', '1 comment', '% comments', '','Disabled') ?></a></span>
              <span class="entry-post-views"><?php gt_set_post_view(); ?> <?= gt_get_post_view(); ?></span>
            </div>
            <div class="entry-image">
              <a href="#" class="entry-image-link">
                  <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
              </a>
            </div>
            
            <div class="clearfix"></div>
            <div class="post_share">
              <ul class="share-links social-bg">
                <li class="share-icon"><span class="s-icon"></span></li>

                <li class="facebook-f"><a href="https://www.facebook.com/sharer?u=<?php the_permalink();?>t;&amp;t=<?php the_title(); ?>" target="_blank" rel="noopener noreferrer"" class="facebook"><span>Facebook</span></a></li>

                <li class="twitter"><a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>;&amp;url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="twitter"><span>Twitter</span></a></li>

                <li class="pinterest-p"><a href="" class="pinterest"></a></li>

                <li class="linkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>&amp;summary=&amp;source=<?php bloginfo('name'); ?>" target="_blank()" rel="noopener noreferrer" class="linkedin"></a></li>

                <li class="reddit"><a href="" class="reddit"></a></li>

                <li class="whatsapp"><a href="https://api.whatsapp.com/send?text=<?php the_title() ?>:&amp;url=<?php the_permalink(); ?>;" target="_blank()" rel="noopener noreferrer" class="whatsapp"></a></li>

                <li class="email"><a href="" class="email"></a></li>
                <li class="show-hid"><a href="javascript:;" rel="nofollow" ></a></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="post-body" style="padding-top:20px;">
            <?php the_content() ?>
            <div class="entry-tags" style="padding-top:20px;">
              <span>Tags</span>
              <?php 
                $post_tags = get_the_tags();
                if ( ! empty( $post_tags ) ) {
                foreach( $post_tags as $post_tag ) {
                    echo '<a class="tag-link" href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a>';
                }
              }
               ?>
            </div>
          </div>
        <?php endwhile; endif; ?>
        <div class="post_share">
          <ul class="share-links social-bg">
            <li class="share-icon"><span class="s-icon"></span></li>
            <li class="facebook-f"><a href="" class="facebook"><span>Facebook</span></a></li>
            <li class="twitter"><a href="" class="twitter"><span>Twitter</span></a></li>
            <li class="pinterest-p"><a href="" class="pinterest"></a></li>
            <li class="linkedin"><a href="" class="linkedin"></a></li>
            <li class="reddit"><a href="" class="reddit"></a></li>
            <li class="whatsapp"><a href="" class="whatsapp"></a></li>
            <li class="email"><a href="" class="email"></a></li>
            <li class="show-hid"><a href="javascript:;" rel="nofollow" ></a></li>
            <li></li>
          </ul>
        </div>
      </div>
      </div>
      <!-- Related Post  -->

      <?php 
        $post_id = get_the_ID();
        $cat_ids = array();
        $categories = get_the_category( $post_id );

        if(!empty($categories) && !is_wp_error($categories)):
            foreach ($categories as $category):
                array_push($cat_ids, $category->term_id);
            endforeach;
        endif;

        $current_post_type = get_post_type($post_id);

        $query_args = array( 
            'category__in'   => $cat_ids,
            'post_type'      => $current_post_type,
            'post__not_in'    => array($post_id),
            'posts_per_page'  => -1,
        );

        $related_cats_post = new WP_Query( $query_args );
        if($related_cats_post->have_posts()):
      ?>
      <div class="related_post_widget widget">
        <div class="widget_title">
          <h3 class="title">You might like</h3>
        </div>
        <div class="widget_content ">
            <div class="grid_post_1 owl-carousel owl-theme">
            <?php 
              
              if($related_cats_post->have_posts()):
                    while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
                <article class="grid_item post-hover">
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
      <?php endif; ?>
      <!-- Comment Template -->
      <?php comments_template() ?>
    </main>
    <?php get_sidebar() ?>
  </div>
</div>

<?php get_footer() ?>
