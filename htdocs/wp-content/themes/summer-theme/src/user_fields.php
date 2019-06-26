<?php
/**
 * Function extra_user_profile_fields( $user )
 */


add_action('show_user_profile', 'extra_user_profile_fields');
add_action('edit_user_profile', 'extra_user_profile_fields');

function extra_user_profile_fields($user)
{ ?>
    <h3><?php esc_html_e('Tell me more of yourself', 'blank'); ?></h3>

    <table class="form-table">
        <tr>
            <th><label for="link_to_git"><?php esc_html_e('Git'); ?></label></th>
            <td>
                <input type="text" name="link_to_git" id="link_to_git" value="<?php echo esc_attr(get_the_author_meta('link_to_git', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your Git.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="link_to_website"><?php esc_html_e('Website'); ?></label></th>
            <td>
                <input type="text" name="link_to_website" id="link_to_website" value="<?php echo esc_attr(get_the_author_meta('link_to_website', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your Website.'); ?></span>
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
            <th><label for="E-mail"><?php esc_html_e('E-mail'); ?></label></th>
            <td>
                <input type="text" name="E-mail" id="E-mail" value="<?php echo esc_attr(get_the_author_meta('E-mail', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your E-mail.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="CSS skills % of perfection"><?php esc_html_e('CSS skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="CSS" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_1" id="CSS" value="<?php echo esc_attr(get_the_author_meta('CSS', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('CSS.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="HTML skills in % of perfection"><?php esc_html_e('HTML skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="HTML" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_2" id="HTML" value="<?php echo esc_attr(get_the_author_meta('HTML', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('HTML.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="JS skills in % of perfection"><?php esc_html_e('JS skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="JS" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_3" id="JS" value="<?php echo esc_attr(get_the_author_meta('JS', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('JS.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="WP skills in % of perfection"><?php esc_html_e('WP skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="WP" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_4" id="WP" value="<?php echo esc_attr(get_the_author_meta('WP', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('WP.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Photoshop skills in % of perfection"><?php esc_html_e('Photoshop skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="Photoshop" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_5" id="Photoshop" value="<?php echo esc_attr(get_the_author_meta('Photoshop', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('Photoshop.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Php skills in % of perfection"><?php esc_html_e('Php skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="PHP" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_6" id="PHP" value="<?php echo esc_attr(get_the_author_meta('PHP', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('Php.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Indesign skills in % of perfection"><?php esc_html_e('Indesign skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="Indesign" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_7" id="Indesign" value="<?php echo esc_attr(get_the_author_meta('Indesign', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('Indesign.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Photography skills in % of perfection"><?php esc_html_e('Photography skills in % of perfection'); ?></label></th>
            <td>
                <input type="range" name="Photography" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_8" id="Photography" value="<?php echo esc_attr(get_the_author_meta('Photography', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('Photography.'); ?></span>
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
                <input type="range" name="Random" onchange="this.setAttribute('value',this.value);" min="0" max="100" value="0" class="my_slider_9" id="Random" value="<?php echo esc_attr(get_the_author_meta('Random', $user->ID)); ?>">
                <span class="description"><?php esc_html_e('Random.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="about"><?php esc_html_e('add info about yourself'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="about" name="about">
        </textarea>
                <span class="description"><?php esc_html_e('Please write something.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="story"><?php esc_html_e('Story of you'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="story" name="story">
        </textarea>
                <span class="description"><?php esc_html_e('Story of you.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="the_truth"><?php esc_html_e('About your skills'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="the_truth" name="the_truth">
        </textarea>
                <span class="description"><?php esc_html_e('Story of you.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Your_past"><?php esc_html_e('Your past 2000-now'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="Your_past" name="Your_past">
        </textarea>
                <span class="description"><?php esc_html_e('Millenium.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Your_past_2"><?php esc_html_e('Your past 1990-2000'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="Your_past_2" name="Your_past_2">
        </textarea>
                <span class="description"><?php esc_html_e('Nineties.'); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="Your_past_1"><?php esc_html_e('Your past 1980-1990'); ?></label></th>
            <td>
                <textarea rows="10" cols="50" id="Your_past_1" name="Your_past_1">
        </textarea>
                <span class="description"><?php esc_html_e('Eighties.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Education"><?php esc_html_e('Education now'); ?></label></th>
            <td>
                <input type="text" name="Education" id="Education" value="<?php echo esc_attr(get_the_author_meta('Education', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Education now.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Education_1"><?php esc_html_e('Education 2010'); ?></label></th>
            <td>
                <input type="text" name="Education_1" id="Education_1" value="<?php echo esc_attr(get_the_author_meta('Education 2010', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Education 2010.'); ?></span>
            </td>
        </tr>


        <tr>
            <th><label for="Education_2"><?php esc_html_e('Education 2000'); ?></label></th>
            <td>
                <input type="text" name="Education_2" id="Education_2" value="<?php echo esc_attr(get_the_author_meta('Education 2000', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Education 2000.'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="Education_3"><?php esc_html_e('Education 1990'); ?></label></th>
            <td>
                <input type="text" name="Education_3" id="Education_3" value="<?php echo esc_attr(get_the_author_meta('Education 1990', $user->ID)); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Education 1990.'); ?></span>
            </td>
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

    update_user_meta($user_id, 'link_to_git', $_POST['link_to_git']);
    update_user_meta($user_id, 'link_to_website', $_POST['link_to_website']);
    update_user_meta($user_id, 'Phone_number', $_POST['Phone_number']);
    update_user_meta($user_id, 'E-mail', $_POST['E-mail']);
    update_user_meta($user_id, 'CSS', $_POST['CSS']);
    update_user_meta($user_id, 'HTML', $_POST['HTML']);
    update_user_meta($user_id, 'JS', $_POST['JS']);
    update_user_meta($user_id, 'WP', $_POST['WP']);
    update_user_meta($user_id, 'Photoshop', $_POST['Photoshop']);
    update_user_meta($user_id, 'Indesign', $_POST['Indesign']);
    update_user_meta($user_id, 'Photography', $_POST['Photography']);
    update_user_meta($user_id, 'Random', $_POST['Random']);
    update_user_meta($user_id, 'about', $_POST['about']);
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
