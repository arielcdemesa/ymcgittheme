<?php get_header(); ?>

    <div id="main">
        <div id="article_list">
            <h1>HEY LOOK AT ME I AM A CATEGORY ARCHIVE TEMPLATE</h1>

            <?php
            // Load in dynamic post content

            // create a 'while' loop to give instructions to WordPress about what to do if it finds posts in the database
            while(have_posts()):
                the_post();
            ?>

            <article>
                <!-- display each post title -->
                <h1>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>

                <!-- display article content -->
                <?php the_excerpt(); ?>

                <p>
                    <a href="<?php the_permalink(); ?>">Read more
                    ...</a>
                </p>
            </article>

            <?php
            endwhile;
            ?>

            <!-- this is the function to generate links to next or previous pages -->
            <?php posts_nav_link(); ?>

            <!-- <img src="img/vector.gif" /> -->

        </div> <!-- #article_list -->
        <?php get_sidebar(); ?>

    </div> <!-- #main -->

<?php get_footer(); ?>

