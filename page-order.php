<?
/*
Template Name: Заказ услуг
*/
get_header();
$user_id = get_current_user_id();
?>
    <div class="content-position">
      
        <div class="content-column">

            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div class="breadcrumbs" id="breadcrumbs">', '</div>');
            }
            ?>
            <h1><?php the_title();?></h1>

            <div class="hr"></div>

            <?php the_content(); ?>

            


        </div>
        <?php get_sidebar(); ?></div>
    <div></div>
    <div id="seo-text">
    </div>
<?php get_sidebar('news');?>

    <div class="footer-place"></div>

    </section>
<?php get_footer();