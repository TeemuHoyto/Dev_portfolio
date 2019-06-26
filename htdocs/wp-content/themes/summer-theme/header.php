

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


    $header_image_arr = the_post_thumbnail();

if ($header_image_arr) {
    $header_image_src = $header_image_arr['sizes']['HD'];
} else {
    $header_image_src = get_template_directory_uri() . '/wp-content/themes/summer-theme/src/header/Rododendron.jpg';
}

?>
            <img class="header_arrow" id="Iso" src="/wp-content/themes/summer-theme/src/header/nuoli.png">

        </div>
        <?php
        wp_head();
        ?>