<?php
get_header();
?>
    <body <?php body_class(); ?>>
    <div class="container errorview">
        <div class="row">
            <div class="col-md-12 text-center">
            	<h1>404 page</h1>
                <h3 class="text-center">
                    <?php
                    _e( "Sorry! We couldn't find what you were looking for", "alpha" );
                    ?>
                </h3>
            </div>
        </div>
    </div>

    </body>

<?php
get_footer();
