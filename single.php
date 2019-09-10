<?php get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part("hero"); ?> 
<div class="posts">
    <?php 
        while( have_posts() ):the_post();
    ?>
    <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h2 class="post-title text-center">

                       <?php the_title(); ?> 
                        <p class="text-center">
                            <strong><?php the_author(); ?></strong><br/>
                            <?php the_date(); ?>
                        </p>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <p>
                        <?php
                            $thumbnail_url = get_the_post_thumbnail_url( null, "large" );
                            printf( '<a class="popup" href="%s" data-featherlight="image">', $thumbnail_url );
                                if(has_post_thumbnail()){
                                    the_post_thumbnail("large",array("class"=>"img-fluid"));
                            echo '</a>';
                                }

                        ?>
                    </p>
                    <?php   the_content(); ?>

                    <?php 
                        next_post_link( '<strong>%link</strong>' );
                        echo '</br>';
                        previous_post_link();
                    ?>
                </div>
            </div>
            

        </div>
    </div>
<?php endwhile; ?>
<div class="pagination">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">

                <?php the_posts_pagination( array(
                    'screen_reader_text'    =>' ',
                    'prev_text'             => __( 'New Posts', 'alpha' ),
                    'next_text'             => __( 'Old Posts', 'alpha' ),
                ) ); ?>

            </div>
        </div>
    </div>
</div>

</div>
<?php get_footer(); ?>