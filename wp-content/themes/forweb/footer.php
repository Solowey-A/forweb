        </div>
        <!--close content class tag-->

            <footer class="page-footer" role="contentinfo">
                <h4 class="tittleBlock text-center"><?php the_field('partners_title', 'option')?></h4>
                <div class="owl-carousel owl-theme logoList actSliderFooter">
                    <?php while (have_rows('partners_logo', 'option')): the_row(); ?>
                    <div class="item">
                        <a href="<?php echo get_sub_field('link')?>"><img src="<?php echo get_sub_field('image')['url']?>" alt="<?php echo get_sub_field('image')['alt']?>" class="logo1"></a>
                    </div>
                    <?php endwhile; ?>

                </div>

                <div class="back-to-top">
                    <img src="<?php echo get_template_directory_uri() . '/dist/images/upArroy.png'?>" alt="up">
                </div>


                <p class="textFooter text-center"><?php the_field('address', 'option')?></p>
                <p class="textFooter text-center"><?php the_field('address_second', 'option')?></p>

                <?php while (have_rows('phone_group', 'option')): the_row(); ?>
                <p class="textFooter text-center"><?php the_sub_field('title')?>
                    <a href="<?php echo get_sub_field('link')['url']?>" class="footerLinkNum">

                        <?php echo get_sub_field('link')['title']?>

                    </a>
                </p>
                <?php endwhile; ?>

                <?php while (have_rows('link_group', 'option')): the_row(); ?>
                <a href="<?php echo get_sub_field('link')['url']?>" class="text-center footerLink"><?php echo get_sub_field('link')['title']?></a>
                <?php endwhile; ?>


                <ul class="footerListSoc">
                    <?php while (have_rows('social_group', 'option')): the_row(); ?>
                    <li><a href="<?php echo get_sub_field('link')?>"><img src="<?php echo get_sub_field('social_icon')['url']?>" alt="<?php echo get_sub_field('social_icon')['alt']?>"></a></li>
                    <?php endwhile; ?>
                </ul>
                <?php while (have_rows('copyright', 'option')): the_row(); ?>

                <p class="textFooter text-center"><?php echo get_sub_field('text')?>
                    <a href="<?php echo get_sub_field('link')['url']?>" class="footerLinkNum"><?php

                        echo get_sub_field('link')['title']?></a>
                </p>
                    <p class="textFooter text-center">
                        <?php echo get_sub_field('second_line')?>
                    </p>
                <?php endwhile; ?>

            </footer>

    <!--close wrapper class tag-->
<?php wp_footer(); ?>

</body>
</html>
