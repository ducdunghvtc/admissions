<?php

	get_header();

?>

<main>

    <div class="container">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div>

                        <?php the_content(); ?>

                    </div>

                <?php endwhile; endif; ?>

            </div>

            <?php get_sidebar();?>

</main>



<?php

    get_footer();

?>