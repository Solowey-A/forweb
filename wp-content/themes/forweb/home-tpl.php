<?php
/*
 * Template Name: Home Template
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">

    <section class="sliderBlock">
        <div class="owl-carousel owl-theme actSlider">

            <?php while (have_rows('slider')): the_row(); ?>


            <div class="item mainSlider1">
                <div class="sliderStyle slider1" style="background-image: url('<?php echo get_sub_field("slider_background")?>')">
                    <div class="containerSlider">
                        <div class="blockNow">
                            <h3><?php echo get_sub_field("banner_title")?></h3>
                            <p class="textSlider">
                                <?php echo get_sub_field("banner_description")?>
                            </p>
                            <a href="<?php echo get_sub_field("banner_link")['url']?>" class="nowLink"><?php echo get_sub_field("banner_link")['title']?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </section>

    <section class="articleSpaceBlock container">
        <h4 class="tittleBlock padleft"><?php the_field('section_title')?></h4>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'exclude' => array(12),
            'category__in' => 1
        );

        $team_query = new WP_Query($args);

        if ($team_query->have_posts()) : while ($team_query->have_posts()) : $team_query->the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page'); ?>
        <?php endwhile;
            wp_reset_postdata(); ?>

        <?php endif; ?>
        <h4 class="tittleBlock padleft"><?php the_field('featured_title')?></h4>

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'hide_empty' => true,
            'category__in' => 3
        );

        $team_query = new WP_Query($args);

        if ($team_query->have_posts()) : while ($team_query->have_posts()) : $team_query->the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page'); ?>

        <?php endwhile;
            wp_reset_postdata(); ?>

        <?php endif; ?>


    </section>

    <section class="youtube">
        <?php while (have_rows('youtube_section')): the_row(); ?>
        <h4 class="tittleBlock padleft"><?php echo get_sub_field("youtube_title")?></h4>
        <div class="video_container" data-youtube-src="<?php echo get_sub_field("video_url")?>">
            <div class="play_button">
                <img src="<?php echo get_sub_field("play_button")['url']?>" alt="<?php echo get_sub_field("play_button")['alt']?>">
            </div>
            <div class="poster" >
                <img src="<?php echo get_sub_field("poster")['url']?>" alt="<?php echo get_sub_field("poster")['alt']?>">
            </div>
        </div>
        <?php endwhile; ?>
    </section>

    <section class="ourEvent container">
        <div class="row">
            <div class="col-md-4">
                <?php while (have_rows('shop')): the_row(); ?>
                <h4 class="tittleBlock"><?php echo get_sub_field("title")?></h4>
                <a href="<?php echo get_sub_field("link")?>">
                    <img src="<?php echo get_sub_field("image")['url']?>" alt="<?php echo get_sub_field("image")['alt']?>">
                </a>
                <?php endwhile; ?>
            </div>
            <div class="col-md-4">
            <?php while (have_rows('support')): the_row(); ?>
                <h4 class="tittleBlock"><?php echo get_sub_field("title")?></h4>
                <a href="<?php echo get_sub_field("link")?>">
                    <img src="<?php echo get_sub_field("image")['url']?>" alt="<?php echo get_sub_field("image")['alt']?>">
                </a>
                <?php endwhile; ?>
            </div>
            <div class="col-md-4">
                <?php while (have_rows('item')): the_row(); ?>
                <a href="<?php echo get_sub_field("link")?>">
                    <div class="concertBlockText">
                        <p><?php echo get_sub_field('text_block')?></p>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="subscribe">
        <h4 class="tittleBlock text-center">SUBSCRIBE.</h4>
        <div class="formEmail">
            <form action="index.php" post="GET">
                <input type="mailUser" name="mailUser" placeholder="EMAIL" id="email" class="postSendStyle h5-email"required="required">
                <button type="button">SIGN UP</button>
            </form>
        </div>
    </section>

    <section class="instagramBlock">
        <h4 class="tittleBlock text-center"><?php the_field('instagram_title')?></h4>
        <div class="wiget">
            <img src="<?php the_field('instagram_image')?>">
        </div>
    </section>

    <section class="socBlock">
        <ul class="socList">
            <?php while (have_rows('social_item')): the_row(); ?>
            <li>
                <a href="<?php echo get_sub_field('social_link')?>">
                    <img src="<?php echo get_sub_field('social_image')['url']?>" alt="<?php echo get_sub_field('social_image')['alt']?>">
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
    </section>


</main>

<?php get_footer(); ?>



