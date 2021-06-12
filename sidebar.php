<aside class="sidebar_wrapper">
    <div class="sidebar1">
        <!-- Popular post widget -->
        <div class="popular-post widget">
            <div class="widget_title">
                <h3 class="title">Most Popular</h3>
            </div>
            <div class="widget-content">

            <?php 
                $args = array(
                    'meta_key'  => 'post_views_count',
                    'posts_per_page' => 4,
                    'orderby'       => 'meta_value_num'
                );
                $popular = new WP_Query($args);
                if($popular->have_posts()):
                    while ($popular->have_posts()): $popular->the_post();
                             
            ?>
            <article class="popular-post post-hover post item-0">
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
                    <span class="entry-time"><?php echo get_the_date('F-d-Y') ?></span>
                </div>
                </div>
            </article>

            <?php endwhile; endif; ?>
            </div>
        </div>

        <!-- Featured Post -->
        <div class="featured-post_wrapper post-hover  widget">
            <div class="widget_title">
            <h3 class="title">Featured Post</h3>
            </div>
            <div class="widget-content">
            <?php 
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 1,
                    'orderby'           => 'rand',
                    'category_name'     => 'wordpress'

                ); 

                $featured_post = new WP_Query($args);
                if($featured_post->have_posts()):
                    while ($featured_post->have_posts()): $featured_post->the_post()
                        
            ?>
            <article class="featured-post post item-0">
                <div class="entry-image">
                <a href="<?php the_permalink() ?>" class="entry-image-link">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                </a>
                </div>
                <div class="entry-header">
                <h2 class="entry-title">
                    <a href=""><?php the_title() ?></a>
                </h2>
                <div class="entry-meta">
                    <span class="entry-author"><?php echo the_author_posts_link() ?></span>
                    <span class="entry-time"><?php echo get_the_date('F-d-Y') ?></span>
                </div>
                </div>
            </article>
        <?php endwhile; endif; ?>
            </div>
        </div>

        <!-- Categroy widget -->
        <div class="category-list_wrapper widget">
            <div class="widget_title">
            <h3 class="title">Categories</h3>
            </div>
            <div class="widget-content">
            <article class="list-table">
                
            <ul>
                <?php 
                    $categories = get_categories(array(
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'hide_empty'    => true
                    ));
                    foreach ($categories as $cat) {
                        echo '<li>
                        <a href="'.get_category_link($cat->term_id).'" class="label-name">'.$cat->name.'<span class="label-count">('.$cat->count.')</span></a>
                        </li>';
                    }
                ?>
                
            </ul>
            </article>
            </div>
        </div>

        <!-- Main Tag widget -->
        <div class="tags-list_wrapper widget">
            <div class="widget_title">
            <h3 class="title">Main Tags</h3>
            </div>
            <div class="widget-content">
            <article class="tag-list">
            <ul>
                <?php 
                    $tag_list = get_tags(array(
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'hide_empty'    => true
                    )
                    );
                    foreach ($tag_list as $tag) {
                        echo '<li><a href="'.get_tag_link($tag->term_id).'" class="tag-name">'.$tag->name.'</a></li>';
                    }
                ?>
            </ul>
            </article>
            </div>
        </div>

    </div>
</aside>