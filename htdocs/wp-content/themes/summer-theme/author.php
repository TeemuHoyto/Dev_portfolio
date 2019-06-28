<?php
/**
 * Template Name: Author page
 *
 * Author page that takes its content from user.
 */

get_header();

$user_info = get_queried_object();
$user_id = $user_info->ID;
$user_slug = 'user_' . $user_id;
$data = get_user_meta($user_id);


?>
<div class="main_container_author">
    <h2 class="author_name"> <?php echo $data['first_name'][0] . " " . $data['last_name'][0]; ?></h2>
    <p class="author_species">HUMAN</p>
    <img class="author_image" id="Iso" src="<?php echo $data['image'][0];  ?>">
    <p class="author_species">CONTACT</p>
    <div class="links_container_author_master">
        <div class="links_container_author_left">
        <a class="author_link_to" href="<?php echo $data['link_to_linkedin'][0]; ?>">
                <p class="author_p_field">  Linkedin  &#127803;</p>
            </a><br>
            <a class="author_link_to" href="mailto:<?php echo $data['E-mail-2'][0]; ?>">
                <p class="author_p_field">  <?php echo $data['E-mail-2'][0]; ?> &#9993;</p>
            </a><br>
            <a class="author_link_to" href="<?php echo $data['link_to_website'][0]; ?>">
                <p class="author_p_field"> Website &#9743; </p>
            </a>

        </div>
        <div class="links_container_author">
            <a class="author_link_to" href="<?php echo $data['link_to_git'][0]; ?>">
                <p class="author_p_field"> &#128218; Git</p>
            </a><br>
            <a class="author_link_to" href="mailto:<?php echo $data['E-mail'][0]; ?>">
                <p class="author_p_field"> &#9993; <?php echo $data['E-mail'][0]; ?></p>
            </a><br>
            <a class="author_link_to" href="tel:<?php echo $data['Phone_number'][0]; ?>">
                <p class="author_p_field"> &#9743; <?php echo $data['Phone_number'][0]; ?></p>
            </a>

        </div>
    </div>
</div>
<div class="var_dump"><br><br><br> <?php

                        var_dump($data); ?>
</div> <?php


        get_footer();
