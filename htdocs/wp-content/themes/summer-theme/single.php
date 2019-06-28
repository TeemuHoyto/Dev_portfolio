<?php get_header(); ?>
<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <div class="maincontainer_single">
                        <h1 class="single_title"> 
                                <?php the_title() ?>
                        </h1>
                        <div class="single_content">
                                <?php the_content() ?>
                </div>
</div>
                <div class="link_single">
                        <?php previous_post_link(); ?>  -  <?php next_post_link(); ?>
                </div>
                
        <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>