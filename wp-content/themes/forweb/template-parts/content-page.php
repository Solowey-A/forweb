<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="articleSpace">
        <div class="imgBlock">
            <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="articlePic">
        </div>

        <div class="contentText">
            <h5 class="titleArticle"><?php the_title();?></h5>
            <?php the_content(); ?>
            <a href="<?php the_permalink();?>" class="moreInfo">More info</a>
            <a href="<?php the_permalink();?>" class="bookNow">BOOK NOW</a>
        </div>
    </div>

</article>
