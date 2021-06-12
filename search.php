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
            <h3 class="title">Showing your search results below: <?php _e(''); echo '&quot;'.$s.'&quot;'; ?></h3>
            <?php if(have_posts() > 5): ?>
              <a href="" class="more">Show more</a>
            <?php endif; ?>
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
                    <span class="entry-post-views"><?php gt_set_post_view(); ?> <?= gt_get_post_view(); ?></span>
                </div>
                <p class="entry-excerpt excerpt"><?php echo the_excerpts('20') ?></p>
              </div>
            </article>
          <?php endwhile; 
          else:
            echo "No results for your search";
          endif;
          ?>
          </div>
          
        </div>
      </div>
    </main>
    <?php get_sidebar() ?>
  </div>
</div>

<?php get_footer() ?>