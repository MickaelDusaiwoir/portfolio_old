<?php
get_header();
?>
<div id="content">
    <section id="bgslide">
        <div id="slider">
            <a href="portfolio">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/slider/s1.png" title="Screen website" width="600" height="300"/>
            </a>
            <a href="portfolio">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/slider/s2.png" title="Screen website" width="600" height="300"/>
            </a>
            <a href="portfolio">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/slider/s3.png" title="Screen website" width="600" height="300"/>
            </a>
            <a href="portfolio">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/slider/s4.png" title="Screen website" width="600" height="300"/>
            </a>
        </div>
    </section>     
    <section class="info travaux">
        <h2><?php _e('Mes derniers travaux'); ?></h2>
        <div id="tvx">
            <?php
            $arg = array('post_type' => 'works', 'posts_per_page' => 3);
            $loop = new WP_query($arg);

            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" title="Aller voir mes travaux"><?php the_post_thumbnail(array(200, 300)); ?></a>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
    <section class="info">
        <h2>
            <?php _e('Derniers Articles du blog'); ?>
        </h2>
        <?php
        $arg1 = array('posts_per_page' => 2,'post_type' => 'blog');
        $loop = new WP_query($arg1);

        if ($loop->have_posts()):
            while ($loop->have_posts()):
                $loop->the_post();
                ?>
                <article class="news">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>
                    <footer>
                        <h4><?php _e('Publié le'); ?> <?php echo get_the_date(); ?></h4>
                        <p>
                            <?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires', 'comments-link', 'Les commentaires sont fermés'); ?>
                        </p>
                    </footer>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </section>
</div>
<?php
get_footer();
?>
