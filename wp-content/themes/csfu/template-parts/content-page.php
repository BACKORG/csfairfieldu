<?php
/**
 * display individual blog
 */
get_header(); ?>

<div class="content-page-wrap">
    <div class="container">

        <h1><?php the_title(); ?></h1>


        <div class="page-content">
            <?php the_content(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>