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
                        <a class="" href="<?php echo "/" . "/index.php"; ?>">
                            <img src="/assets/img/flowrama-logo.png" alt="flowrama-logo" width="30" height="30"
                                 class="d-inline-block align-top mr-2" alt="">
                        </a>
                        <a class="navbar-brand br-text-dark font" style="font-size: 24px; margin-top: -8px"
                           href="<?php echo "/" . "/index.php"; ?>"><strong>FLOW
                                <!--<sup>BETA</sup>--></strong></a>
                        <br>
                        <span>Condividi!</span>
                        <br><br>
                        <?php include $_SERVER["DOCUMENT_ROOT"] . '/template-parts/social.php'; ?>
                        <br><br>
                    </div>
                    <div class="col-sm-2 pl-5 pr-0 pt-1 text-left d-none d-md-block" style="font-size: 14px;">

                        <h6><b><a class="text-dark d-none"
                                  href="/aree.php">Aree</a></b>
                        </h6>

                        <?php echo "<a href=\"ASD.php\" class=\"text-dark d-none\">Asd</a> "; ?>

                    </div>
                    <div class="col-sm-2 pl-5 pr-0 pt-1 text-left d-none d-md-block" style="font-size: 14px;">
                        <h6><b><a class="text-dark" href="/<?php echo $lang_short; ?>/about.php">About</a></b></h6>
                        <a class="text-dark" href="/<?php echo $lang_short; ?>/about.php#history">
                            Storia
                        </a><br>
                        <a class="text-dark" href="/<?php echo $lang_short; ?>/about.php#values">
                            Valori
                        </a><br>

                    </div>
                    <div class="col-sm-2 pl-5 pr-0 pt-1 text-left d-none d-md-block" style="font-size: 14px;">
                        <h6><b><a class="text-dark" href="/<?php echo $lang_short; ?>/support.php">Support</a></b></h6>
                        <a class="text-dark" href="/<?php echo $lang_short; ?>/contacts.php">
                            Contattaci
                        </a><br>
                        <a class="text-dark" href="/<?php echo $lang_short; ?>/faq.php">
                            FAQ
                        </a><br>

                    </div>

                    <div class="col-12 text-left pl-0 pr-0 d-md-none" style="font-size: 14px;">
                        <a class="" href="<?php echo "/" . $lang_short . "/index.php"; ?>">
                            <img src="/assets/img/flowrama-logo.png" alt="flowrama-logo" width="40" height="40"
                                 class="d-inline-block align-top mr-2" alt="">
                        </a>
                        <a class="navbar-brand br-text-dark font" style="font-size: 36px; margin-top: -14px"
                           href="<?php echo "/" . $lang_short . "/index.php"; ?>"><strong> FLOW
                                <!--<sup>BETA</sup>--></strong></a>
                        <br>
                        <span class="mt-2 pt-2">Condividi!</span>
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
                        <!-- ABOUT -->
                        <div class="pt-1 pb-2 text-left row">
                            <div class="col-12" data-toggle="collapse" href="#collapseTwo">
                                <span class="text-dark font-weight-bold">About</span>
                                <hr class="pt-1 mt-1 pb-1 mb-1">
                            </div>
                            <div id="collapseTwo" class="collapse col-12" data-parent="#accordion">
                                <div class="container-fluid">

                                    <div class="row mb-2">
                                        <a class="text-dark" href="/<?php echo $lang_short; ?>/about.php#history">Storia</a>
                                    </div>
                                    <div class="row mt-2 mb-2">
                                        <a class="text-dark" href="/<?php echo $lang_short; ?>/about.php#values">Valori</a>
                                    </div>

                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <!-- SUPPORTO -->
                        <div class="pt-1 pb-2 text-left row">
                            <div class="col-12" data-toggle="collapse" href="#collapseThree">
                                <span class="text-dark font-weight-bold">Supporto</span>
                                <hr class="pt-1 mt-1 pb-1 mb-1">
                            </div>
                            <div id="collapseThree" class="collapse col-12" data-parent="#accordion">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <a class="text-dark" href="/<?php echo $lang_short; ?>/contacts.php">Contattaci</a>

                                    </div>
                                    <div class="row mt-2 mb-2">
                                        <a class="text-dark" href="/<?php echo $lang_short; ?>/faq.php">FAQ</a>
                                    </div>
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
                    <div class="col-sm-9 text-left pl-1"><p>© <?php echo date("Y"); ?>, Flowrama - VAT ID:
                            02880910340</p>
                    </div>

                    <div class="col-sm-3 pl-5 text-left pr-0 d-none d-md-block">
                        <p>
                            <a class="text-info mr-2" href="/<?php echo $lang_short; ?>/termini-di-servizio.php"
                               target="_blank">
                                Termini e condizioni</a>
                            <a class="text-info ml-1" href="/<?php echo $lang_short; ?>/privacy-policy.php"
                               target="_blank">Privacy policy</a>
                        </p>
                    </div>
                    <div class="col-sm-3 pl-1 text-left pr-0 d-md-none">
                        <p>
                            <a class="text-info mr-2" href="/<?php echo $lang_short; ?>/termini-di-servizio.php"
                               target="_blank">
                                Termini e condizioni</a>
                            <a class="text-info ml-1" href="/<?php echo $lang_short; ?>/privacy-policy.php"
                               target="_blank">Privacy policy</a>
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
