<?php get_header(); ?>

<body <?php body_class(); ?>>

<?php get_template_part("hero"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="posts">
                    <?php 
                        while( have_posts() ):the_post();
                    ?>
                    <div class="post">
                        <div class="container">
                            <div class="row">
                                <div class="">
                                    <h2 class="post-title">

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="">
                                    <p>
                                        <strong><?php the_author(); ?></strong><br/>
                                        <?php the_date(); ?>
                                    </p>
                                <?php 
                                echo get_the_tag_list("<ul class=\"list-unstyled\"><li>","<li></li>","</li>"); ?>
                                </div>
                                <div class="col-md-8">
                                    <p>
                                        <?php
                                            if(has_post_thumbnail()){
                                                the_post_thumbnail("large",array("class"=>"img-fluid"));
                                            }
                                        ?>
                                    </p>

                                  <?php if(is_single()){
                                    the_content();
                                  }else{
                                    the_excerpt();
                                  }
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
            </div>
        <div class="col-md-4">
            <?php 
                if(is_active_sidebar('sidebar-1')){
                    dynamic_sidebar('sidebar-1');
                }
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>