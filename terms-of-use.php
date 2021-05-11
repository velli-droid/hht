<?php
/*
Template Name: ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ
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
<section class="terms-of-use">
    <div class="container">
        <div class="terms-of-use__inner">
            <div class="section-title">
                <h2><?php the_field('terms-of-use_title'); ?></h2>
            </div>
            <div class="terms-of-use__content">
                <?php the_field('terms-of-use_text'); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();