<?php
/*
Template Name: ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ
*/
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Home Health Test
 */

get_header();
?>
<section class="privacy-policy">
    <div class="container">
        <div class="privacy-policy__inner">
            <div class="section-title">
                <h2><?php the_field('privacy-policy_title'); ?></h2>
            </div>
            <div class="privacy-policy__content">
                <?php the_field('privacy-policy_text'); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
