<?php
get_header(); ?>

<!-- Page Content -->
<div class="container">



    <!-- Marketing Icons Section -->
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
            <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        global $post;
                        $author_ID  = $post->post_author;
                        $author_URL = get_author_posts_url($author_ID);
                    ?>
            <!-- Title -->
            <h1 class="mt-4"><?php the_title()?></h1>
            <!-- Post category: -->
            <h2 class="mt-4"><?php the_category(" ")?></h2>
            <!-- Author -->
            <p class="lead">
                by
                <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
            </p>
            <hr>
            <!-- Date/Time -->
            <p><?php the_time(get_option('date_format'));
                       echo " ";
                       the_time(get_option('time_format')); ?></p>
            <hr>
            <!-- Preview Image -->
            <?php
                if (has_post_thumbnail()) {
                            the_post_thumbnail("full", ["class" => "card-img-top"]);
                        }
                    ?>
            <hr>
            <!-- Post Content -->
            <?php the_content();
                        $defaults = [
                            'before' => '<div class="row justify-content-center align-items-center">' . __('Pages:'),
                            'after'  => '</div>',
                        ];
                        wp_link_pages($defaults);
                        edit_post_link();
                    ?>
            <hr>

            <!-- Tag cloud -->
            <?php the_tags('', ', '); ?>
            <hr>

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <?php previous_post_link();?>
                </li>
                <li class="page-item">
                    <?php next_post_link();?>
                </li>
            </ul>

            <!-- Comments Form -->

            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- Single Comment -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

            <!-- Comment with nested comments -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                    vulputate fringilla. Donec lacinia congue felis in faucibus.
                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                            ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                            ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            }?>
        </div>
        <?php get_sidebar(); ?>
        <?php /* get_sidebar('second')  sidebar-second.php */?>
    </div>
    <!-- /.row -->


</div>
<!-- /.container -->

<?php get_footer(); ?>