<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flow
 */

?>

    <?php $lang_short = "IT"; ?>

    <?php
    function d3_echo_footer_menu_col_by_location($location){
        $cleanermenu = wp_nav_menu( array(
            'theme_location' => $location,
            'depth' => 0,
            'echo' => false,
        ) );
        $cleanermenu = strip_tags($cleanermenu,'<a>');
        $find = array('<a','/a>');
        $replace = array('<a class="text-dark"','/a><br>');


        $cleanermenu = str_replace( $find, $replace, $cleanermenu );

        $replacefirstoccurrence = '<h6><b><a class="text-dark"';
        $needle = '<a class="text-dark"';
        $pos = strpos($cleanermenu, $needle);
        if ($pos !== false) {
            $cleanermenu = substr_replace($cleanermenu, $replacefirstoccurrence, $pos, strlen($needle));
        }

        $replacefirstoccurrence = '/a></b></h6>';
        $needle = '/a><br>';
        $pos = strpos($cleanermenu, $needle);
        if ($pos !== false) {
            $cleanermenu = substr_replace($cleanermenu, $replacefirstoccurrence, $pos, strlen($needle));
        }

        echo $cleanermenu;
    }

    function d3_echo_footer_menu_accordion_title_by_location($location){
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations[$location];
        $menu = wp_get_nav_menu_items($menuID);
        $first = true;
        foreach ( $menu as $menuItem ) {
            if ($first){
                echo '<span class="text-dark font-weight-bold">'.$menuItem->title.'</span>';
                $first = false;
            }
        }
    }

    function d3_echo_footer_menu_accordion_items_by_location($location){
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations[$location];
        $menu = wp_get_nav_menu_items($menuID);
        $first = true;
        foreach ( $menu as $menuItem )
        {
            if ( $first ){
                $first = false;
            }
            else {
                echo '<div class="row mb-2">';
                echo '<a href="'.$menuItem->url.'" title="'.$menuItem->title.'" class="text-dark">'.$menuItem->title.'</a>';
                echo '</div>';
            }
        }
    }

    function d3_echo_footer_bottom_menu_row_by_location($location){
        $cleanermenu = wp_nav_menu( array(
            'theme_location' => $location,
            'depth' => 0,
            'echo' => false,
        ) );
        $cleanermenu = strip_tags($cleanermenu,'<a>');
        $find = array('<a','/a>');
        $replace = array('<a class="text-info ml-1 mr-1"','/a>');

        $cleanermenu = str_replace( $find, $replace, $cleanermenu );

        echo $cleanermenu;
    }
    ?>

	<footer id="colophon" class="site-footer container-fluid bg-light">
		<div class="site-info d-none">
			<a class="" href="<?php echo esc_url( __( 'https://wordpress.org/', 'flow' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'flow' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'flow' ), 'flow', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->

        <!-- Footer -->
        <div class="container-fluid text-center pt-5 pt5 bg-light " style="margin-bottom:0">
            <div class="container text-center pt-3 pb-3">
                <div class="row">
                    <div class="col-sm-6 text-left pl-0 d-none d-md-block" style="font-size: 14px;">
                        <div class="col-12 pl-0 pr-0">
                            <a class="" href="<?php echo "/"; ?>">
                                <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
                                ?>" alt="flowrama-logo" style="width: 120px;"
                                     class="d-inline-block align-top" alt="">
                            </a>
                        </div>
                        <div class="col-12 pl-0 pr-0 pt-1">
                            <span class=""><?php echo $site_url = get_bloginfo( 'description' ); ?></span>
                        </div>
                        <div class="col-12 pl-0 pr-0 pt-1">
                            <?php include $_SERVER["DOCUMENT_ROOT"] . '/template-parts/social.php'; ?>
                        </div>
                    </div>
                    <div class="col-sm-2 pl-5 pr-0 pt-1 text-left d-none d-md-block" style="font-size: 14px;">

                        <h6><b><a class="text-dark d-none"
                                  href="/aree.php">Aree</a></b>
                        </h6>

                        <?php echo "<a href=\"ASD.php\" class=\"text-dark d-none\">Asd</a> "; ?>

                    </div>

                    <?php
                        echo "<div class='col-sm-2 pl-5 pr-0 pt-1 text-left d-none d-md-block' style='font-size: 14px;'>";
                        d3_echo_footer_menu_col_by_location('d3-footer-menu-1');
                        echo "</div>";

                        echo "<div class='col-sm-2 pl-5 pr-0 pt-1 text-left d-none d-md-block' style='font-size: 14px;'>";
                        d3_echo_footer_menu_col_by_location('d3-footer-menu-2');
                        echo "</div>";
                    ?>

                    <div class="col-12 text-left pl-0 pr-0 d-md-none" style="font-size: 14px;">
                        <a class="" href="<?php echo "/" . $lang_short . "/index.php"; ?>">
                            <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
                            ?>" alt="flowrama-logo" style="width: 120px;"
                                 class="d-inline-block align-top mr-2" alt="">
                        </a>
                        <br>
                        <span class="mt-2 pt-2"><?php echo $site_url = get_bloginfo( 'description' ); ?></span>
                        <br><br>
                        <?php include $_SERVER["DOCUMENT_ROOT"] . '/template-parts/social.php'; ?>
                        <br><br>
                    </div>
                    <!-- ACCORDION -->
                    <div class="text-left d-md-none container-fluid pl-0 pr-0" id="accordion">
                        <br>
                        <!-- AREE -->
                        <div class="pt-1 pb-2 text-left row d-none">
                            <div class="col-12 pb-0 mb-0" data-toggle="collapse" href="#collapseOne">
                                <span class="text-dark font-weight-bold">Aree</span>
                                <hr class="pt-1 mt-1 pb-1 mb-1">
                            </div>
                            <div id="collapseOne" class="collapse col-12" data-parent="#accordion">
                                <div class="container-fluid">
                                    <?php
                                    echo "  <div class=\"row mt-2 mb-2\"><a href=\"/" . $lang_short . "/" . ".php\" class=\"text-dark\">AREA</a></div>";
                                    ?>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <!-- FOOTER MENU 1 -->
                        <div class="pt-1 pb-2 text-left row">
                            <div class="col-12" data-toggle="collapse" href="#collapseTwo">
                                <?php d3_echo_footer_menu_accordion_title_by_location('d3-footer-menu-1'); ?>
                                <hr class="pt-1 mt-1 pb-1 mb-1 bg-transparent">
                            </div>
                            <div id="collapseTwo" class="collapse col-12" data-parent="#accordion">
                                <div class="container-fluid">
                                    <?php d3_echo_footer_menu_accordion_items_by_location('d3-footer-menu-1'); ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <!-- FOOTER MENU 2 -->
                        <div class="pt-1 pb-2 text-left row">
                            <div class="col-12" data-toggle="collapse" href="#collapseThree">
                                <?php d3_echo_footer_menu_accordion_title_by_location('d3-footer-menu-2'); ?>
                                <hr class="pt-1 mt-1 pb-1 mb-1 bg-transparent">
                            </div>
                            <div id="collapseThree" class="collapse col-12" data-parent="#accordion">
                                <div class="container-fluid">
                                    <?php d3_echo_footer_menu_accordion_items_by_location('d3-footer-menu-2'); ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar-->
        <div class="container-fluid text-center small pt-3 pb-3 text-muted bg-light">
            <div class="container text-center pt-3 pb-3 border-top text-muted">
                <div class="row" style="font-size: 13px;">
                    <div class="col-sm-9 text-left pl-1">
                        <?php query_posts(array('post_type' => 'd3_cpt_footer_copy'));
                        while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-sm-3 pl-5 text-left pr-0 d-none d-md-block">
                        <p>
                            <?php d3_echo_footer_bottom_menu_row_by_location('d3-footer-bottom-menu-2'); ?>
                        </p>
                    </div>
                    <div class="col-sm-3 pl-1 text-left pr-0 d-md-none">
                        <p>
                            <?php d3_echo_footer_bottom_menu_row_by_location('d3-footer-bottom-menu-2'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
