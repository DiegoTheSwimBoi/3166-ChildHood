<?php
/*
Template Name: Игрушки
*/
?>

<?php
get_header();
?>

<div class="toys" >
            <div class="container">
                <a href="http://3166-childhood/soft_toys/" class="subtitle" style="text-decoration: none; display: flex; justify-content: center;">Мягкие игрушки</a>
                <div class="toys__wrapper">

                <?php
                    $my_posts_soft = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => "soft_toys",
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                    foreach( $my_posts_soft as $post ){
                            setup_postdata( $post );
        ?>

                    <div class="toys__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_title(); ?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_descr'); ?>
                            </div>
                            
                            <?php
                                            $field=get_field('toys_btn');

                                            if($field=='On'){
                                                ?>
                                               <a class="minibutton toys__trigger" href="<?=get_permalink();?>">Подробнее</a>
                                                <?php
                                            }
                                            ?>  
                        </div>
                    </div>

                    

        <?php

        }
        wp_reset_postdata();


        ?>

                
                </div>


                
                <a href="http://3166-childhood/edu_toys/" class="subtitle" style="text-decoration: none; display: flex; justify-content: center;">Развивающие игрушки</a>
                <div class="toys__wrapper">
                <?php
                    $my_posts_edu = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => "edu_toys",
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                    foreach( $my_posts_edu as $post ){
                        setup_postdata( $post );

                ?>

                    <div class="toys__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"> <?php the_title(); ?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_descr'); ?>   
                            </div>
                            <?php
                                            $field=get_field('toys_btn');

                                            if($field=='On'){
                                                ?>
                                               <a class="minibutton toys__trigger" href="<?=get_permalink();?>">Подробнее</a>
                                                <?php
                                            }
                                            ?>  
                        </div>
                    </div>

                    <?php

}
wp_reset_postdata();


?>


                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="toys__alert">
                            <span>Не нашли то, что искали?</span> Свяжитесь с нами - и мы с радостью создадим любую игрушку по вашему желанию. Вы можете выбрать все: размер, материал, формы...!
                        </div>
                    </div>
                </div>
            </div>
</div>


<?php
get_footer();
?>