<?php
/**
 * Index.php
 *
 * @package
 * @since 
 */

get_header(); ?>


<div class="maincontainer">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

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