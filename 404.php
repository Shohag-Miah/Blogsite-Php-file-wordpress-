<?php
get_header() ?>
<div class="content_wrapper">
      	<div class="container">
        	<main class="main_content_wrapper " style="width:100%; margin-bottom:30px">
        		<div class="page_content error-page-content">
					<p>Oops! Page Not Found</p>
	        		<h1 style="background: url(<?php echo get_template_directory_uri() ?>/assets/image/jason-leung-Xaanw0s0pMk-unsplash\ \(1\).jpg)">404</h1>
                    <p>We can't find the page you're looking for.</p>
					<div class="">
						<a href="<?php echo esc_url(home_url('/')) ?>">Go Back Home</a>
					</div>
	        	</div>
        	</main>
    	</div>
    </div>
<?php get_footer() ?>