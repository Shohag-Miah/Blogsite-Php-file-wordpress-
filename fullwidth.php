<?php
/* 
    Template Name: Full Width
*/
get_header(); ?>

<div class="content_wrapper">
      	<div class="container">
        	<main class="main_content_wrapper">
        		<div class="page_content">
	        		
        			<?php 
        			if(have_posts()):
        				while (have_posts()): the_post();
	        		?>
	        		<?php the_content() ?>
	        		<?php endwhile; endif; ?>
	        	</div>
        	</main>
    	</div>
    </div>
<?php get_footer() ?>