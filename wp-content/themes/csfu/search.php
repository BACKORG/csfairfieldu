<?php
/**
 * display posts in search
 */
get_header(); ?>

<?php 
    if ( have_posts() ): 
?>      
        <div class="content-page-wrap">
	    	<div class="container">
	            <div class="post-wrap">
	                <?php 
	                    while ( have_posts() ) : the_post();
	                        get_template_part( 'template-parts/content', get_post_format() );
	                    endwhile;
	                ?>
	            </div>
	
	            <div class="page-wrap">
	                <?php
	                    the_posts_pagination([
	                        'screen_reader_text' => ' ', 
	                        'mid_size' => 2,
	                    ]);
	                ?>
	            </div>
	        </div>
	    </div>
<?php
    else:
        get_template_part( 'template-parts/content', 'none' ); 
    endif; 
?>
 
<?php get_footer(); ?>