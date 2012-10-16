<?php
get_header();
?>
<div class="content">  
    <p id="portfolio">
        <?php _e('Retrouvrer ici mes designs et conceptions') ?>
    </p>    
    <h2 id="portTitle">
        Portfolio
    </h2>
    <div id="gallery">
        <?php
        $arg = array('post_type' => 'works', 'posts_per_page' => 6);
        $loop = new WP_query($arg);

        if ($loop->have_posts()):
            while ($loop->have_posts()):
                $loop->the_post();
                ?>
                <article class="portfolio">    
                    <a href="<?php the_permalink(); ?>" title="<?php _e('Voir l\'article') ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    <h2><?php the_title(); ?></h2>
                </article>
                <?php
            endwhile;
        endif;
        ?>
        </di>
    </div>
    <?php
    get_footer();
    ?>
