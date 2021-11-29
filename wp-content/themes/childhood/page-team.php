<?php
/*
Template Name: Наша Команда
*/
?>

<?php
get_header();
?>

<div class="specialists">
            <div class="container">
                <div class="title"><?=the_field('team_title')?></div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <?php
                                $image=get_field('team_img');

                                if (!empty($image)):?>
                                <img src="<?= $image["url"]?>" alt="<?= $image["alt"]?>" class="specialists__img">
                                <?php endif;

                                //print_r($image);
                            ?>
                    </div>
                </div>
            </div>
</div>


<?php
get_footer();
?>