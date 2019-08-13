<?php
/**
 * The main template file.
 */

get_header();

$query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '-1' ) );
   
?>


<div class="maincontainer">
    <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <ul class="post_in_ul"  >

                <!-- <h3><a class="link_on_image" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3> -->
                <?php the_post_thumbnail('featured-large', get_the_ID()) ?>
                <a id="link_on_image" href="<?php the_permalink(); ?>"><div class="post_exerpt_to_show"> <?php the_excerpt(); ?></div></a>
                <h3 class="post_title_on_image" ><a id="link_on_image" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
            </ul>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>