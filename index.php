<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' );?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo('description'); ?></h3>
                <h1 class="align-self-center display-1 text-center heading">
                    <?php bloginfo('name'); ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="posts">
    <?php 
        while( have_posts() ):the_post();
    ?>
    <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(); ?></strong><br/>
                        <?php the_date(); ?>
                    </p>
                    <ul class="list-unstyled">
                        <li>dhaka</li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail("large",array("class"=>"img-fluid"));
                            }
                        ?>
                    </p>
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
    </div>
<?php endwhile; ?>

</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; LWHH - All Rights Reserved
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>