<?php get_header(); ?>

    <div id="main">
        <div id="article_list">

            <?php
            // Load in dynamic post content

            // create a 'while' loop to give instructions to WordPress about what to do if it finds posts in the database
            while(have_posts()):
                the_post();
            ?>

            <article>
                <h1>HEY LOOK AT ME I AM A SINGLE POST PAGE</h1>
                <!-- display each post title -->
                <h1><?php the_title(); ?></h1>

                <!-- display article content -->
                <?php the_excerpt(); ?>
            </article>

            <?php
            endwhile;
            ?>

            <!-- <img src="img/vector.gif" /> -->

        </div> <!-- #article_list -->
        <?php get_sidebar(); ?>

    </div> <!-- #main -->

<?php get_footer(); ?>

