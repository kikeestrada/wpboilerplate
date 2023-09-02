<?php
/**
 * Template Name: two columns
 *
 * @package wpboilerplate
 */

get_header(); ?>
<div class="content-info-column">
    <div class="content-info-column__item"></div>
    <div class="content-info-column__item">
    <?php the_content();?>
    </div>
</div>
<?php get_footer(); ?>
