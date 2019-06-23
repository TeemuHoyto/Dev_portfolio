<?php
    /**
     * Function extra_user_profile_fields( $user )
     */


    add_action( 'show_user_profile', 'extra_user_profile_fields' );
    add_action( 'edit_user_profile', 'extra_user_profile_fields' );

    function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Tell me more of yourself", "blank"); ?></h3>
    
    <table class="form-table">
    <tr>
    <th><label for="link_to_git"><?php _e("Git"); ?></label></th>
    <td>
    <input type="text" name="link_to_git" id="link_to_git" value="<?php echo esc_attr( get_the_author_meta( 'link_to_git', $user->ID ) ); ?>" class="regular-text" /><br />
    <span class="description"><?php _e("Please enter your Git."); ?></span>
    </td>
    </tr>
    <tr>
    <th><label for="link_to_website"><?php _e("Website"); ?></label></th>
    <td>
    <input type="text" name="link_to_website" id="link_to_website" value="<?php echo esc_attr( get_the_author_meta( 'link_to_website', $user->ID ) ); ?>" class="regular-text" /><br />
    <span class="description"><?php _e("Please enter your Website."); ?></span>
    </td>
    </tr>
    <tr>
    <th><label for="Phone_number"><?php _e("Phone number"); ?></label></th>
    <td>
    <input type="text" name="Phone_number" id="Phone_number" value="<?php echo esc_attr( get_the_author_meta( 'Phone_number', $user->ID ) ); ?>" class="regular-text" /><br />
    <span class="description"><?php _e("Please enter your phone number."); ?></span>
    </td>
    </tr>
    <tr>
    <th><label for="E-mail"><?php _e("E-mail"); ?></label></th>
    <td>
    <input type="text" name="E-mail" id="E-mail" value="<?php echo esc_attr( get_the_author_meta( 'E-mail', $user->ID ) ); ?>" class="regular-text" /><br />
    <span class="description"><?php _e("Please enter your E-mail."); ?></span>
    </td>
    </tr>
    </table>
    <?php }
    
    add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
    add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );
    
    function save_extra_user_profile_fields( $user_id ) {
    
    if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
    
    update_user_meta( $user_id, 'link_to_git', $_POST['link_to_git'] );
    update_user_meta( $user_id, 'link_to_website', $_POST['link_to_website'] );
    update_user_meta( $user_id, 'Phone_number', $_POST['Phone_number'] );
    update_user_meta( $user_id, 'E-mail', $_POST['E-mail'] );
    }