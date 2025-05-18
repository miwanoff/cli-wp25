<?php
get_header(); ?>

<!-- Page Content -->
<div class="container">



    <!-- Marketing Icons Section -->
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">
            <?php

                while (have_posts()) {
                    the_post();
                    global $post;
                    $author_ID  = $post->post_author;
                    $author_URL = get_author_posts_url($author_ID);
                ?>
            <!-- Title -->
            <h1 class="mt-4"><?php the_title()?></h1>

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
            <h4>News:</h4>
            <div class="related-posts clearfix">
                <?php
                    $categories = get_the_category();
                        $rp_query   = new WP_Query(['category_name' => 'news']);
                        if ($rp_query->have_posts()) {
                            while ($rp_query->have_posts()) {
                                $rp_query->the_post();
                            ?>
                <div class="mpost clearfix">
                    <?php
                        if (has_post_thumbnail()) {
                                    ?>
                    <div class="entry-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <?php
                        }
                                ?>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                            <li><i class="icon-comments"></i> <?php comments_number('0'); ?></li>
                        </ul>
                        <!-- <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div> -->
                    </div>
                </div>
                <?php
                    }
                            wp_reset_postdata();

                        }
                    ?>
            </div>



            <?php
                if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                }
            ?>
        </div>
        <!-- <?php /* get_sidebar(); */ ?> -->
        <?php /* get_sidebar('second')  sidebar-second.php */?>
    </div>
    <!-- /.row -->


</div>
<!-- /.container -->

<?php get_footer(); ?>