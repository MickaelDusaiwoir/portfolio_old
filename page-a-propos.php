<?php
get_header();
?>
<div id="propos">
    <h1>
        <?php bloginfo('name'); ?>
    </h1>

    <?php
    $arg = array('post_type' => 'about', 'posts_per_page' => 3);
    $loop = new WP_query($arg);

    if ($loop->have_posts()):
        while ($loop->have_posts()):
            $loop->the_post();
            ?>
            <h2>
                <?php the_title(); ?>
            </h2>
            <p>
                <?php the_content(); ?>
            </p>
            <?php
        endwhile;
    endif;
    ?>

    <section>

        <h2>
            <?php _e('Mescompétences') ?>
        </h2>

        <table>    
            <tbody>
                <tr>
                    <td>HTML</td><td class="lv5">*****</td>
                </tr>

                <tr>
                    <td>CSS</td><td class="lv5">*****</td>
                </tr>
                <tr>
                    <td>PHP</td><td class="lv4">****</td>
                </tr>
                <tr>
                    <td>JavaScript</td><td class="lv3">***</td>
                </tr>
                <tr>
                    <td>Action Script</td><td class="lv2">**</td>
                    </td>
                <tr>
                    <td>Wordpress </td><td class="lv2">**</td>
                </tr>
                <tr>
                    <td>Drupal</td><td class="lv1">*</td>
                </tr>
                <tr>
                    <td>CodeIgniter</td><td class="lv1">*</td>
                </tr>
            </tbody>
        </table>

    </section>
</div>
<?php
get_footer();
?>