<?php
/*Template Name: D3 CPT About*/
get_header();
query_posts(array(
    'post_type' => 'd3_cpt_about'
)); ?>
<?php
while (have_posts()) : the_post(); ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-4 pb-4">
                    <h2><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;
get_footer();
?>