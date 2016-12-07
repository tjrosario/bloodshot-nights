<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Magnus
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
    <div id="sidebar" class="sidebar">
        <div id="sidebar-inner" class="sidebar-inner">

            <div class="site-branding">

                <div class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
                        <img src="<?=get_template_directory_uri() ?>/images/logo.png">
                    </a>
                </div>

                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div><!-- .site-branding -->

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav class="main-navigation widget" role="navigation">
                <h2 class="menu-heading widget-title"><?php _e( 'Navigation', 'magnus' ); ?></h2>
                <?php
                    // Primary navigation menu.
                    wp_nav_menu( array(
                        'menu_class'     => 'nav-menu',
                        'theme_location' => 'primary',
                    ) );
                ?>
            </nav><!-- .main-navigation -->
        <?php endif; ?>

        <?php if ( has_nav_menu( 'social' ) ) : ?>
            <nav id="social-navigation widget" class="social-navigation" role="navigation">
                <?php
                    // Social links navigation menu.
                    wp_nav_menu( array(
                        'theme_location' => 'social',
                        'depth'          => 1,
                        'link_before'    => '<span class="screen-reader-text">',
                        'link_after'     => '</span>',
                    ) );
                ?>
            </nav><!-- .social-navigation -->
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div id="secondary" class="widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div><!-- .widget-area -->
        <?php endif; ?>

            <?php 
                $theme_options = get_option('my_theme_settings');
            ?>
            <div class="site-social">
                <ul class="social">
                    <li><a href="<?=$theme_options['social_facebook']?>" rel="external" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?=$theme_options['social_twitter']?>" rel="external" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?=$theme_options['social_instagram']?>" rel="external" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="<?=$theme_options['social_email']?>" rel="external" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
                    <button class="sidebar-toggle" aria-controls="sidebar" aria-expanded="false">
                <!--
                    <span class="sidebar-toggle-icon"><?php _e( 'Sidebar', 'magnus' ); ?></span>
                -->
                    <i class="fa fa-bars" aria-hidden="true"></i>

                </button>
    </div><!-- .sidebar -->
<?php endif; ?>
