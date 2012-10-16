<?php
get_header();
?>
<section id="content">
    <div id="gallery">
        <?php
        $arg = array('post_type' => 'works', 'posts_per_page' => 12);
        $loop = new WP_query($arg);

        if ($loop->have_posts()):
            while ($loop->have_posts()):
                $loop->the_post();
                ?>
                <article class="portfolio">                    
                    <div class="vigniette">
                        <a href="<?php the_permalink(); ?>" title="<?php _e('Voir l\'article') ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    </div>
                    <div class="post">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" title="<?php _e('Lire la suite') ?>"><?php _e('Lire plus') ?></a>
                    </div>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<?php
get_footer();
?>
