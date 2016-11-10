<?php
/**
 * display news page 
 */
get_header(); ?>

<div class="content-page-wrap">
    <div class="container">
    	<h2 class="page-news-title">Latest News:</h2>
    	
    	<div class="col-md-8">
			<?php
				if (is_page()) {
				  	$posts = get_posts ("showposts=5");
				  	if ($posts) {
				    foreach ($posts as $post):
				      	setup_postdata($post); 
				      	get_template_part( 'template-parts/content', get_post_format() );
				    endforeach;
				  }
				}
			?>
		</div>
		
		<div class="col-md-4 right-sidebar">
			<?php include 'sidebar.php';?>
		</div>
	</div>
</div>		

<?php get_footer(); ?>