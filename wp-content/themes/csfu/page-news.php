<?php
/**
 * display news page 
 */
get_header(); ?>

<div class="content-page-wrap">
    <div class="container">
    	
    	<div class="col-md-12">
    		<?php
	    		if (is_page()) {
		            global $query_string;
		            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		            query_posts ('posts_per_page=2&paged='.$paged);
		            while ( have_posts() ) : the_post();
		                get_template_part( 'template-parts/content', get_post_format() );
		            endwhile;
	    		}
	        ?>
	        
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
</div>		

<?php get_footer(); ?>