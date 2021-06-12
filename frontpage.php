    <?php
    /* Template Name: FrontPage */
    get_header(); ?>
    <!-- Featured Post Here -->
    <?php get_template_part('template_parts/Home/featured') ?> 
    
    <div class="content_wrapper">
      <div class="container">
      <!-- Right Content here -->
        <main class="main_content_wrapper">
          <div class="blog_posts">  

            <!-- Blog Section Two -->
            <?php get_template_part('template_parts/Home/blog_2') ?> 
            
            
            <!-- BLog section  Three -->
            <?php get_template_part('template_parts/Home/blog_3') ?> 
            
            <!-- Blog section Four -->
            <?php get_template_part('template_parts/Home/blog_4') ?> 

            <!--  Recent Post -->
            <?php get_template_part('template_parts/Home/recent') ?> 
            
            
          </div> <!-- blog_posts -->
        </main><!--  .main_content_wrapper -->

        <!-- Sidebar Here -->
        <?php get_sidebar(); ?>
      </div>
    </div>

    <?php get_footer(); ?>