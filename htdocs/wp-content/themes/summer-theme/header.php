

<!DOCTYPE html>
<html>

<head>
    <nav class="top-ar"> <a class="siteTitle" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name') ?></a></nav>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WPSUMMERPROJECT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <main>
        <div class="main_nav">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            <?php


if ( has_post_thumbnail() ) {
    $header_image = get_the_post_thumbnail_url( $post->ID, 'HD' );
} else {
    $header_image = '/wp-content/themes/summer-theme/src/header/Rododendron.jpg';

}

?>
    <img class="header_img" id="Iso" src="<?php echo $header_image  ?>">
            <img class="header_arrow" id="Iso" src="/wp-content/themes/summer-theme/src/header/nuoli.png">

        </div>
        <?php
        wp_head();
        ?>
