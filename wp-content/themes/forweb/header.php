<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>

        <div class="content">
            <header class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <ul class="logoLine">
                            <?php while (have_rows('logo', 'option')): the_row(); ?>
                            <li>
                                <a href="<?php echo get_sub_field('logo_link')['url'] ?>">
                                    <img src="<?php echo get_sub_field('logo_image')['url'] ?>" alt="<?php echo get_sub_field('logo_image')['alt'] ?>">
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="topHeaderBlock">
                            <ul class="headerNav">
                                <li><a href="#" class="shop">Shop
                                        cart</a></li>
                                <li>
                                    <ul class="headerListSoc">
                                        <li><div class="sendSearch"></div></li>
                                        <?php while (have_rows('social_item', 'option')): the_row(); ?>
                                        <li><a href="<?php echo get_sub_field('social_link')['url'] ?>"><img src="<?php echo get_sub_field('social_icon')['url'] ?>" alt="<?php echo get_sub_field('social_icon')['alt'] ?>"></a></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo get_field('donat_link', 'option')['url'] ?>"><?php echo get_field('donat_link', 'option')['title'] ?></a></li>
                            </ul>
                            <p class="headerText">
                                <?php echo get_field('headline', 'option') ?>
                            </p>
                        </div>
                        <div class="searchRow">
                            <form role="search" method="get"  action="">

                                <div class="searchHeaderBlock">
                                    <div class="small-8 columns">
                                        <input type="text" value="<?php the_search_query(); ?>" name="s"  placeholder="Search" class="inputSearch" autofocus/>
                                    </div>
                                    <div class="small-4 columns">
                                        <input type="submit" value="Search" class="buttonSearch">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed icon-menu menuActive" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse menu">
                        <?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
                                'container' => 'ul',
                                'theme_location' => 'menu-1',
                                'walker' => new My_Custom_Nav_Walker()
                            )
                        ); ?>
                    </div>
                </nav>
            </header>
