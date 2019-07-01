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
    <p class="author_species"> <?php echo $data['tag_line'][0] ?></p>
    <img class="author_image" id="Iso" src="<?php echo $data['image'][0];  ?>">
    <p class="author_species">CONTACT</p>
    <div class="links_container_author_master">
        <div class="links_container_author_left">
        <a class="author_link_to" href="<?php echo $data['link_to_linkedin'][0]; ?>">
                <p class="author_p_field">  Linkedin  &#127803;</p>
            </a><br>
            <a class="author_link_to" href="mailto:<?php echo $data['E-mail-2'][0]; ?>">
                <p class="author_p_field">  <?php echo $data['E-mail-2'][0]; ?> &#64;</p>
            </a><br>
            <a class="author_link_to" href="<?php echo $data['link_to_website'][0]; ?>">
                <p class="author_p_field"> Website &#127808; </p>
            </a>

        </div>
        
        <div class="links_container_author">
            <a class="author_link_to" href="<?php echo $data['link_to_git'][0]; ?>">
                <p class="author_p_field"> &#128218; Git</p>
            </a><br>
            <a class="author_link_to" href="mailto:<?php echo $data['E-mail'][0]; ?>">
                <p class="author_p_field"> &#64; <?php echo $data['E-mail'][0]; ?></p>
            </a><br>
            <a class="author_link_to" href="tel:<?php echo $data['Phone_number'][0]; ?>">
                <p class="author_p_field"> &#9743; <?php echo $data['Phone_number'][0]; ?></p>
            </a>

        </div>
    </div>
    <h3 class="h3_title_user_megatitle">About me</h3>
<div class="text_container_author_master">
    <div class="links_container_author_left">
    <h3 class="h3_title_user">Who is <?php echo $data['first_name'][0] ?></h3>
    <p class="p_user_header"><?php echo $data['Text_of_choise_2'][0]?></p>

<p> <?php echo $data['about'][0] ?></p>
<p class="p_user_header"><?php echo $data['Text_of_choise_1'][0]?></p>

<p> <?php echo $data['story'][0] ?></p>
<p class="p_user_header"><?php echo $data['Text_of_choise_3'][0]?></p>

<p> <?php echo $data['traveling'][0] ?></p>
<br>

<div class="master_conteiner_progress_bar">
    <div class="bar_1" style=' width: <?php echo $data['HTML'][0] ?>% ;'><p class="p_user_progress_bar_name"><?php echo $data['skill_name_1'][0]?></p><p class="p_user_progress_bar_number"><?php echo $data['HTML'][0]?>%</p></div>
    <div class="bar_2" style=' width: <?php echo $data['CSS'][0] ?>% ;'><p class="p_user_progress_bar_name"><?php echo $data['skill_name_2'][0]?></p><p class="p_user_progress_bar_number"><?php echo $data['CSS'][0]?>%</p></div>
    <div class="bar_3"></div>
    <div class="bar_4"></div>
    <div class="bar_5"></div>
    <div class="bar_6"></div>
    <div class="bar_7"></div>
    <div class="bar_8"></div>
    <div class="bar_9"></div>
</div>


</div>
    <div class="links_container_author">
    <h3 class="h3_title_user"> Education</h3>
    <p class="p_user_header" ><?php echo $data['Education'][0]?></p>
    <br>
    <p> <?php echo $data['the_truth'][0] ?></p>
    <br>
    <p class="p_user_header" > <?php echo $data['Education_1'][0]?></p>
    <br>
    <p> <?php echo $data['Your_past'][0] ?></p>
<br>
    <p class="p_user_header" > <?php echo $data['Education_2'][0]?></p>
    <br>
    <p> <?php echo $data['Your_past_1'][0] ?></p>
<br> 
    <p class="p_user_header" > <?php echo $data['Education_3'][0]?></p>
    <br>
    <p> <?php echo $data['Your_past_2'][0] ?></p>
<br>
    </div>
</div>


</div>
<div class="var_dump"><br><br><br> <?php

                        var_dump($data); ?>
</div> <?php


        get_footer();
