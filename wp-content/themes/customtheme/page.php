<!-- GENERAL NEW PAGE TEMPLATE -->
<?php get_header();?>

<div class="container">
    <h1>This is a template for WP template building</h1>
    <h2><?php the_title();?></h2>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

</div>

<?php get_footer();?>