<?php

/**
 * Function extra_user_profile_fields( $user )
 */


add_action('show_user_profile', 'extra_user_profile_fields');
add_action('edit_user_profile', 'extra_user_profile_fields');

function extra_user_profile_fields($user)
{ ?>
    <h3 class="more_details">Tell the internet more of yourself</h3>

    <table class="form-table">

        <tr>
            <th>
            <td>
                <hr>
                <h2 class="more_details_two">This section contains links to your website and social media</h2>
                <hr>
            </td>
            </th>
        </tr>

        <tr>
            <th><label for="tag_line"><?php esc_html_e('Tagline for you'); ?></label></th>
            <td>
                <input type="text" name="tag_line" id="tag_line" value="<?php echo esc_attr(get_the_author_meta('tag_line', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your Tagline.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="link_nro_1"><?php esc_html_e('Link name'); ?></label></th>
            <td>
                <input type="text" name="link_nro_1" id="link_nro_1" value="<?php echo esc_attr(get_the_author_meta('link_nro_1', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter a name for your link.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="link_to_git"><?php esc_html_e('Link address'); ?></label></th>
            <td>
                <input type="text" name="link_to_git" id="link_to_git" value="<?php echo esc_attr(get_the_author_meta('link_to_git', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Link address.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="link_nro_2"><?php esc_html_e('Link name'); ?></label></th>
            <td>
                <input type="text" name="link_nro_2" id="link_nro_2" value="<?php echo esc_attr(get_the_author_meta('link_nro_2', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter a name for your link.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="link_to_website"><?php esc_html_e('Link address'); ?></label></th>
            <td>
                <input type="text" name="link_to_website" id="link_to_website" value="<?php echo esc_attr(get_the_author_meta('link_to_website', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Link address.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="link_nro_3"><?php esc_html_e('Link name'); ?></label></th>
            <td>
                <input type="text" name="link_nro_3" id="link_nro_3" value="<?php echo esc_attr(get_the_author_meta('link_nro_3', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter a name for your link.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="link_to_linkedin"><?php esc_html_e('Link address'); ?></label></th>
            <td>
                <input type="text" name="link_to_linkedin" id="link_to_linkedin" value="<?php echo esc_attr(get_the_author_meta('link_to_linkedin', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Link address.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Phone_number"><?php esc_html_e('Phone number'); ?></label></th>
            <td>
                <input type="text" name="Phone_number" id="Phone_number" value="<?php echo esc_attr(get_the_author_meta('Phone_number', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your phone number.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="E-mail-2"><?php esc_html_e('E-mail'); ?></label></th>
            <td>
                <input type="text" name="E-mail-2" id="E-mail-2" value="<?php echo esc_attr(get_the_author_meta('E-mail-2', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter another E-mail.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="E-mail"><?php esc_html_e('E-mail-2'); ?></label></th>
            <td>
                <input type="text" name="E-mail" id="E-mail" value="<?php echo esc_attr(get_the_author_meta('E-mail', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your E-mail.'); ?></span>
            </td>
        </tr>

        <tr>
            <th>
            <td>
                <hr>
                <h2 class="more_details_two">Choose the skill level you possess using the sliders as your tool</h2>
                <hr>
            </td>
            </th>
        </tr>

        <tr>
            <th><label for="skill_name_1"><?php esc_html_e('Skill name'); ?></label></th>
            <td>
                <input type="text" name="skill_name_1" id="skill_name_1" value="<?php echo esc_attr(get_the_author_meta('skill_name_1', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter Skill name.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Skills % of perfection"><?php esc_html_e('Skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="CSS" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('CSS', $user->ID)); ?>" class="my_slider_1" id="CSS">
                <span class="description"><?php esc_html_e('Skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="skill_name_2"><?php esc_html_e('Skill name'); ?></label></th>
            <td>
                <input type="text" name="skill_name_2" id="skill_name_2" value="<?php echo esc_attr(get_the_author_meta('skill_name_2', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter Skill name.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Skills in % of perfection"><?php esc_html_e('Skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="HTML" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('HTML', $user->ID)); ?>" class="my_slider_2" id="HTML">
                <span class="description"><?php esc_html_e('Skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="skill_name_3"><?php esc_html_e('Skill name'); ?></label></th>
            <td>
                <input type="text" name="skill_name_3" id="skill_name_3" value="<?php echo esc_attr(get_the_author_meta('skill_name_3', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter Skill name.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Skills in % of perfection"><?php esc_html_e('Skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="JS" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('JS', $user->ID)); ?>" class="my_slider_3" id="JS">
                <span class="description"><?php esc_html_e('Skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="skill_name_4"><?php esc_html_e('Skill name'); ?></label></th>
            <td>
                <input type="text" name="skill_name_4" id="skill_name_4" value="<?php echo esc_attr(get_the_author_meta('skill_name_4', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter Skill name.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Skills in % of perfection"><?php esc_html_e('Skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="WP" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('WP', $user->ID)); ?>" class="my_slider_4" id="WP">
                <span class="description"><?php esc_html_e('Skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="skill_name_5"><?php esc_html_e('Skill name'); ?></label></th>
            <td>
                <input type="text" name="skill_name_5" id="skill_name_5" value="<?php echo esc_attr(get_the_author_meta('skill_name_5', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter Skill name.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Skills in % of perfection"><?php esc_html_e('Skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="Photoshop" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('Photoshop', $user->ID)); ?>" class="my_slider_5" id="Photoshop">
                <span class="description"><?php esc_html_e('Skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="skill_name_6"><?php esc_html_e('Skill name'); ?></label></th>
            <td>
                <input type="text" name="skill_name_6" id="skill_name_6" value="<?php echo esc_attr(get_the_author_meta('skill_name_6', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter Skill name.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Skills in % of perfection"><?php esc_html_e('Skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="PHP" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('PHP', $user->ID)); ?>" class="my_slider_6" id="Indesign">
                <span class="description"><?php esc_html_e('Skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="skill_name_7"><?php esc_html_e('Skill name'); ?></label></th>
            <td>
                <input type="text" name="skill_name_7" id="skill_name_7" value="<?php echo esc_attr(get_the_author_meta('skill_name_7', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter Skill name.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Skills in % of perfection"><?php esc_html_e('Skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="Indesign" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('Indesign', $user->ID)); ?>" class="my_slider_7" id="Indesign">
                <span class="description"><?php esc_html_e('Skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="skill_name_8"><?php esc_html_e('Skill name'); ?></label></th>
            <td>
                <input type="text" name="skill_name_8" id="skill_name_8" value="<?php echo esc_attr(get_the_author_meta('skill_name_8', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter Skill name.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Skills in % of perfection"><?php esc_html_e('Skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="Photography" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('Photography', $user->ID)); ?>" class="my_slider_8" id="Photography">
                <span class="description"><?php esc_html_e('Skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="random_skill_text_field"><?php esc_html_e('Random skill depiction'); ?></label></th>
            <td>
                <input type="text" name="random_skill_text_field" id="random_skill_text_field" value="<?php echo esc_attr(get_the_author_meta('random_skill_text_field', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter depiction of random skill.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Random skills in % of perfection"><?php esc_html_e('Random skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="Random" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="<?php echo esc_attr(get_the_author_meta('Random', $user->ID)); ?>" class="my_slider_9" id="Random">
                <span class="description"><?php esc_html_e('Random.'); ?></span>
            </td>
        </tr>

        <tr>
            <th>
            <td>
                <hr>
                <h2 class="more_details_two">This section contains info about you and your skills</h2>
                <hr>
            </td>
            </th>
        </tr>

        <tr>
            <th><label for="Text_of_choise_1"><?php esc_html_e('Label of your choise'); ?></label></th>
            <td>
                <input type="text" name="Text_of_choise_1" id="Text_of_choise_1" value="<?php echo esc_attr(get_the_author_meta('Text_of_choise_1', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Label of your choise.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="about"><?php esc_html_e('Add info about yourself'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" type="text" id="about" name="about" class="regular-text">  <?php echo esc_attr(get_the_author_meta('about', $user->ID)); ?></textarea>
                <span class="description"><?php esc_html_e('Please write something.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Text_of_choise_2"><?php esc_html_e('Label of your choise'); ?></label></th>
            <td>
                <input type="text" name="Text_of_choise_2" id="Text_of_choise_2" value="<?php echo esc_attr(get_the_author_meta('Text_of_choise_2', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Label of your choise.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="story"><?php esc_html_e('Story of you'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" name="story" id="story"> <?php echo esc_attr(get_the_author_meta('story', $user->ID)); ?>
                                </textarea>
                <span class="description"><?php esc_html_e('Story of you.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Text_of_choise_3"><?php esc_html_e('Label of your choise'); ?></label></th>
            <td>
                <input type="text" name="Text_of_choise_3" id="Text_of_choise_3" value="<?php echo esc_attr(get_the_author_meta('Text_of_choise_3', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Label of your choise.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="traveling"><?php esc_html_e('Add more info about yourself'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" type="text" id="traveling" name="traveling" class="regular-text">  <?php echo esc_attr(get_the_author_meta('traveling', $user->ID)); ?></textarea>
                <span class="description"><?php esc_html_e('Please write something.'); ?></span>
            </td>
        </tr>


        <tr>
            <th><label for="Education"><?php esc_html_e('Label of your choise'); ?></label></th>
            <td>
                <input type="text" name="Education" id="Education" value="<?php echo esc_attr(get_the_author_meta('Education', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Label of your choise.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="the_truth"><?php esc_html_e('About your skills'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="the_truth" name="the_truth"><?php echo esc_attr(get_the_author_meta('the_truth', $user->ID)); ?>
                                </textarea>
                <span class="description"><?php esc_html_e('Story of you.'); ?></span>
            </td>
        </tr>


        <tr>
            <th><label for="Education_1"><?php esc_html_e('Education most recent'); ?></label></th>
            <td>
                <input type="text" name="Education_1" id="Education_1" value="<?php echo esc_attr(get_the_author_meta('Education_1', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Education most recent.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Your_past"><?php esc_html_e('About your most recent education'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="Your_past" name="Your_past"><?php echo esc_attr(get_the_author_meta('Your_past', $user->ID)); ?>
                                </textarea>
                <span class="description"><?php esc_html_e('Education.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Education_2"><?php esc_html_e('Education self-learn'); ?></label></th>
            <td>
                <input type="text" name="Education_2" id="Education_2" value="<?php echo esc_attr(get_the_author_meta('Education_2', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Education self-learn.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Your_past_1"><?php esc_html_e('What you have done to teach yourself ? ? ?'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="Your_past_1" name="Your_past_1"><?php echo esc_attr(get_the_author_meta('Your_past_1', $user->ID)); ?>
                                </textarea>
                <span class="description"><?php esc_html_e('What you have done to teach yourself ? ? ?'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Education_3"><?php esc_html_e('Education Other'); ?></label></th>
            <td>
                <input type="text" name="Education_3" id="Education_3" value="<?php echo esc_attr(get_the_author_meta('Education_3', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Education Other.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Your_past_2"><?php esc_html_e('Other education'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="Your_past_2" name="Your_past_2"> <?php echo esc_attr(get_the_author_meta('Your_past_2', $user->ID)); ?>
                                </textarea>
                <span class="description"><?php esc_html_e('Other education.'); ?></span>
            </td>
        </tr>

        <tr>
            <th>
            <td>
                <hr>
                <h2 class="more_details_two">This section should show an image of you to the world</h2>
                <hr>
            </td>
            </th>
        </tr>

        <tr>
            <th><label for="image">Profile Image</label></th>

            <td>
                <img id="image_px" src="<?php echo esc_attr(get_the_author_meta('image', $user->ID)); ?> ">
                <input type="text" name="image" id="image" value="<?php echo esc_attr(get_the_author_meta('image', $user->ID)); ?>" class="regular-text" /><input type='button' class="button-primary" value="Upload Image" id="uploadimage" /><br />
                <span class="description">Please upload your image for your profile from url. It should be a square and its corners will be rounded.</span>
            </td>
        </tr>



    </table>
<?php }


function my_profile_upload_js()
{ ?>

    <script type="text/javascript">
        jQuery(document).ready(function() {

            jQuery(document).find("input[id^='uploadimage']").live('click', function() {
                //var num = this.id.split('-')[1];
                formfield = jQuery('#image').attr('name');
                tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');

                window.send_to_editor = function(html) {
                    imgurl = jQuery('img', html).attr('src');
                    jQuery('#image').val(imgurl);

                    tb_remove();
                }

                return false;
            });
        });
    </script>

<?php }


add_action('personal_options_update', 'save_extra_user_profile_fields');
add_action('edit_user_profile_update', 'save_extra_user_profile_fields');

function save_extra_user_profile_fields($user_id)
{

    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }
    update_user_meta($user_id, 'tag_line', $_POST['tag_line']);
    update_user_meta($user_id, 'link_to_git', $_POST['link_to_git']);
    update_user_meta($user_id, 'link_to_linkedin', $_POST['link_to_linkedin']);
    update_user_meta($user_id, 'E-mail-2', $_POST['E-mail-2']);
    update_user_meta($user_id, 'link_to_website', $_POST['link_to_website']);
    update_user_meta($user_id, 'Phone_number', $_POST['Phone_number']);
    update_user_meta($user_id, 'E-mail', $_POST['E-mail']);
    update_user_meta($user_id, 'CSS', $_POST['CSS']);
    update_user_meta($user_id, 'HTML', $_POST['HTML']);
    update_user_meta($user_id, 'JS', $_POST['JS']);
    update_user_meta($user_id, 'WP', $_POST['WP']);
    update_user_meta($user_id, 'Photoshop', $_POST['Photoshop']);
    update_user_meta($user_id, 'Indesign', $_POST['Indesign']);
    update_user_meta($user_id, 'PHP', $_POST['PHP']);
    update_user_meta($user_id, 'random_skill_text_field', $_POST['random_skill_text_field']);
    update_user_meta($user_id, 'Photography', $_POST['Photography']);
    update_user_meta($user_id, 'Random', $_POST['Random']);
    update_user_meta($user_id, 'about', $_POST['about']);
    update_user_meta($user_id, 'skill_name_1', $_POST['skill_name_1']);
    update_user_meta($user_id, 'skill_name_2', $_POST['skill_name_2']);
    update_user_meta($user_id, 'skill_name_3', $_POST['skill_name_3']);
    update_user_meta($user_id, 'skill_name_4', $_POST['skill_name_4']);
    update_user_meta($user_id, 'skill_name_5', $_POST['skill_name_5']);
    update_user_meta($user_id, 'skill_name_6', $_POST['skill_name_6']);
    update_user_meta($user_id, 'skill_name_7', $_POST['skill_name_7']);
    update_user_meta($user_id, 'skill_name_8', $_POST['skill_name_8']);
    update_user_meta($user_id, 'link_nro_1', $_POST['link_nro_1']);
    update_user_meta($user_id, 'link_nro_2', $_POST['link_nro_2']);
    update_user_meta($user_id, 'link_nro_3', $_POST['link_nro_3']);

    update_user_meta($user_id, 'Text_of_choise_1', $_POST['Text_of_choise_1']);
    update_user_meta($user_id, 'Text_of_choise_2', $_POST['Text_of_choise_2']);
    update_user_meta($user_id, 'Text_of_choise_3', $_POST['Text_of_choise_3']);
    update_user_meta($user_id, 'traveling', $_POST['traveling']);
    update_user_meta($user_id, 'image', $_POST['image']);
    update_user_meta($user_id, 'story', $_POST['story']);
    update_user_meta($user_id, 'the_truth', $_POST['the_truth']);
    update_user_meta($user_id, 'Your_past', $_POST['Your_past']);
    update_user_meta($user_id, 'Your_past_1', $_POST['Your_past_1']);
    update_user_meta($user_id, 'Your_past_2', $_POST['Your_past_2']);
    update_user_meta($user_id, 'Education', $_POST['Education']);
    update_user_meta($user_id, 'Education_1', $_POST['Education_1']);
    update_user_meta($user_id, 'Education_2', $_POST['Education_2']);
    update_user_meta($user_id, 'Education_3', $_POST['Education_3']);
}