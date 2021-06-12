<?php
/* 
    Template Name: Contact
*/
get_header(); ?>

<div class="container">
	<div class="breadcrumbs_content">
		<?php echo get_breadcrumb() ?>
	</div>
</div>
<div class="content_wrapper">
      	<div class="container">
        	<main class="main_content_wrapper">
        		<div class="page_content">
	        		<div class="widget_title">
	                    <h3 class="title"><?php the_title() ?></h3>
	                </div>
        			<?php 
        			if(have_posts()):
        				while (have_posts()): the_post();
	        		?>
	        		<?php the_content() ?>
	        		<?php endwhile; endif; ?>
	        	</div>
        	</main>
        	<?php get_sidebar() ?>
    	</div>
    </div>
<?php get_footer() ?>