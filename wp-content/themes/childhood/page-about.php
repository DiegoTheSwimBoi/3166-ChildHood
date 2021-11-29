<?php
/*
Template Name: О нас
*/
?>

<?php
get_header();
?>

<div class="aboutus" >
            <div class="container">
                <h1 class="title"><?=the_field('history_title')?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?=get_field('history_gr1')['g1_sub'];?>
                        </div>
                        <div class="aboutus__text">
                        <?=get_field('history_gr1')['g1_Text'];?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        $imagP1=get_field('history_gr1')['g1_img'];

                        if (!empty($imagP1)):?>
                        <img src="<?= $imagP1["url"]?>" alt="<?= $imagP1["alt"]?>" class="aboutus__img">
                        <?php endif;
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                    <?php
                        $imagP2=get_field('history_g2')['g2_img'];

                        if (!empty($imagP2)):?>
                        <img src="<?= $imagP2["url"]?>" alt="<?= $imagP2["alt"]?>" class="aboutus__img">
                        <?php endif;
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?=get_field('history_g2')['g2_sub'];?>
                        </div>
                        <div class="aboutus__text">
                        <?=get_field('history_g2')['g2_text'];?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?=get_field('history_g3')['g3_sub'];?>
                        </div>
                        <div class="aboutus__text">
                        <?=get_field('history_g3')['g3_text'];?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <?php
                    $imagP3=get_field('history_g3')['g3_img'];
                    if (!empty($imagP2)):?>
                        <img src="<?= $imagP3["url"]?>" alt="<?= $imagP3["alt"]?>" class="aboutus__img">
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>
</div>


<?php
get_footer();
?>
