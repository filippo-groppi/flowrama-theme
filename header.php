<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flow
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <!-- outputs a flags list (without languages names) -->
    <ul class="d-none">
        <?php pll_the_languages( array( 'show_flags' => 1,'show_names' => 1, 'display_names_as' => 1) ); ?>
    </ul>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page container-fluid" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'flow' ); ?></a>

	<header id="masthead" class="site-header navbar navbar-expand-md bg-white navbar-light">
		<div class="site-branding container d-none">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$flow_description = get_bloginfo( 'description', 'display' );
			if ( $flow_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $flow_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation container d-none">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'flow' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->


        <a class="d-none" href="<?php echo "/"; ?>">
            <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="brandizator-logo" class="d-inline-block align-top mr-2" alt="" style="height: 30px;">
        </a>
        <a class="navbar-brand br-text-dark mr-0 font d-none" href="<?php echo "/en/index.php"; ?>"><strong>FLOW<!--<sup>BETA</sup>--></strong></a>
        <button class="navbar-toggler text-dark border-0 d-none" aria-label="nav-toggler" name="nav-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon pr-5"></span>
        </button>
        <div class="pl-md-2 pl-0 ml-md-1 ml-0 pt-md-0 pt-2 collapse navbar-collapse text-dark" id="collapsibleNavbar" style="display: none!important;">
            <?php
            class D3_Nav_Menu extends Walker_Nav_Menu {
                function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
                    $output .= sprintf( "\n<li class='%s'><a href='%s' class='%s'>%s</a></li>\n",
                        'nav-item',
                        get_permalink($item->ID),
                        'dropdown-item text-dark',
                        get_the_title($item->ID)
                    );
                }
            }

//            $d3menu = wp_nav_menu( array(
//                'theme_location' => 'menu-1',
//                'walker'         => new D3_Nav_Menu(),
//                'container'      => 'ul',
//                'menu_class'     => 'navbar-nav',
//            ) );

            //echo $d3menu;

            //pll_the_languages(array('show_flags' => 1, 'show_names' => 1, 'display_names_as' => 1));

            ?>
        </div>

        <?php require_once ("template-parts/d3-nav-walker.php"); ?>

        <nav class="navbar navbar-expand-md navbar-light container pt-0 pb-0" role="navigation">
            <div class="container-fluid pl-0 pr-0">
                <!-- Brand and toggle get grouped for better mobile display -->

                <a class="navbar-brand d-none" href="#">Navbar</a>
                <a class="navbar-brand pl-0" href="<?php echo "/"; ?>">
                    <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="brandizator-logo" class="d-inline-block align-top mr-2" alt="" style="height: 30px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'd3-nav-menu-primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav ml-0',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>

    </header><!-- #masthead -->


