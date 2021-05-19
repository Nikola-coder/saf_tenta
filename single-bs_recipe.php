<?php
/*
	 * Template Post Type: post
	 */

get_header();  ?>

<div id="content" class="site-content container py-5 mt-4">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <?php the_breadcrumb(); ?>

        <div class="row">
            <div class="col-md-8 col-xxl-9">

                <main id="main" class="site-main">

                    <header class="entry-header">
                        <?php the_post(); ?>
                        <?php bootscore_category_badge(); ?>
                        <?php the_title('<h1>', '</h1>'); ?>
                        <p class="entry-meta">
                            <?php bootscore_recipe_score_badge(); ?>

                            <small class="text-muted">

                                <?php
                                bootscore_date();
                                _e(' by ', 'recipes');
                                the_author_posts_link();
                                bootscore_comment_count();
                                ?>
                                <?php bootscore_recipe_category_badge(); ?>
                                <?php bootscore_recipe_tag_badge(); ?>


                            </small>
                        </p>
                        <div class="entry-content mt-3 mb-3">
                            <?php the_content(); ?>
                        </div>
                        <?php bootscore_post_thumbnail(); ?>
                        <?php bootscore_bs_servings(); ?>
                    </header>

                    <div>
                        <?php bootscore_bs_ingredients(); ?>
                    </div>


                    <?php bootscore_bs_instructions(); ?>

                    <center class="me-5">
                            <?php bootscore_recipe_gallery(); ?>
                    </center>

                    <footer class="entry-footer clear-both">
                        <div class="mb-4">
                            <?php bootscore_tags(); ?>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <?php previous_post_link('%link'); ?>
                                </li>
                                <li class="page-item">
                                    <?php next_post_link('%link'); ?>
                                </li>
                            </ul>
                        </nav>
                    </footer>

                    <?php comments_template(); ?>

                </main> <!-- #main -->

            </div><!-- col -->
            <?php get_sidebar(); ?>
        </div><!-- row -->

    </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>