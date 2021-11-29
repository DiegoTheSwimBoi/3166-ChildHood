<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
        <meta name="theme-color" content="#c9e0e04d">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/img/favicons/apple-touch-icon-180x180.png">
        <?php
            wp_head();
        ?>
    </head>
    <body class="no-svg">
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-11 col-sm-12 col-md-12 col-lg-3">
                        <div class="header__logo">

                            <a href="<?php echo get_home_url(); ?>" class="header__logo">
                            
                            <img src="<?php
                            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
                            echo $custom_logo__url[0];
                            ?>" alt="Мир Детства" class="header__logo-img">

                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 offset-lg-0 col-xl-7 offset-xl-2 ">

                    <?php

            $contacts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => "seetings",
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $contacts as $post ){
                setup_postdata( $post );

            ?>
                        <div class="header__contacts">
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/email.svg" alt="почта" class="header__contacts-logo">
                                <a href="mailto:<?php the_field('about_email',2);?>" class="header__contacts-mail"><?php the_field('about_email',2);?></a>
                            </div>
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/phone.svg" alt="телефон" class="header__contacts-logo">
                                <div class="header__contacts-tel">
                                <?php $tel_str=get_field("Phone");
                                        $tel_arr=explode("/",$tel_str);
                                        foreach ($tel_arr as $telephone){
                                            ?>
                                            <a href="tel:<?=$telephone?>"><?=$telephone?></a>
                                            <?php
                                        } 
                                    ?>
                                </div>
                            </div>
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="header__contacts-logo">
                                <address><?=the_field('about_adress')?></address>
                            </div>
                        </div>
<?php
            }
wp_reset_postdata();
?>
                    </div>
                </div>
                <nav class="row" data-slide="1">
                    <?php
                    wp_nav_menu( [
                        //'theme_location'  => '',
                        'menu'            => 'Main',
                        'container'       => false,
                        //'container_class' => '',
                        //'container_id'    => '',
                        'menu_class'      => 'header__nav',
                        //'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        //'before'          => '',
                        //'after'           => '',
                        //'link_before'     => '',
                        //'link_after'      => '',
                        'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
                        'depth'           => 1,
                        //'walker'          => '',
                    ] );
                    ?>
                    
                </nav>
            </div>
            <div class="header__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>