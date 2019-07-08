<!-- BLOG ARCHIVE PAGE -->
<?php get_header();?>

<div class="container">
    <h1>This is a template for WP template building</h1>
    <h2><?php single_cat_title();?></h2>



        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('smallest');?>" alt="">
            <?php endif;?>

            <h3><?php the_title();?></h3>

            <?php the_excerpt();?>

            <a href="<?php the_permalink();?>">Read more...</a>

        <?php endwhile; endif;?>

</div>

<?php get_footer();?>