<?php 

add_action('wp_ajax_nopriv_shohag_load_more','shohag_load_more');
add_action('wp_ajax_shohag_load_more','shohag_load_more');

function shohag_load_more(){

    $paged  = $_POST['page']+1;

    $query = new WP_Query(array(
        'post_type' => 'post',
        'post_status'   => 'publish',
        'paged' => $paged
    ));

    if($query->have_posts()):
        while($query->have_posts()): $query->the_post(); ?>
            <article class="recent_post post-hover" id="recent_post">
                      <div class="entry-image">
                        <span class="cat_name"><?php 
                            $cat = get_the_category();
                            foreach($cat as $category){
                                echo $category->name;
                            }
                        ?></span>
                        <a href="<?php the_permalink() ?>" class="entry-image-link">
                          <span class="entry-thumb" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)"></span>
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
        <?php 
        endwhile; 
    endif;
    wp_reset_postdata();
    wp_die();

}