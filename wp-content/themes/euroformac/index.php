<?php get_header();  ?>
<!-- inicio parte central -->
<div class="container">

    <!-- inicio parte izquierda -->
    <div class="izquierda">
        <h1>Blog</h1>
        <section class="contenido">
            <!--  /*inicio del famoso LOOP  de Wordpress */ -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                    <?php
                    $postContent = get_the_content();
                    $extracto = substr($postContent, 0, 100);
                    ?>

                    <article>
                        <div class="imagen" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/card_image.jpg');"></div>

                        <div class="titulo"><?php the_title(); ?></div>

                        <div class="contenido_article">
                            <?php echo $extracto; ?>
                        </div>

                        <div class="leer_mas">
                            <a href="<?php the_permalink();  ?>">Leer más</a>
                        </div>
                    </article>




            <?php endwhile;
            else :
                echo '<p>There are no posts!</p>';
            endif;
            ?>
            <!-- /* fin del LOOP de Wordpress */ -->
        </section>

    </div>
    <!-- fin parte izquierda -->

    <!-- inicio aside -->
    <aside>
        <div class="aside_block">
            <h2>Los más visitados</h2>
            <ul class="aside_list">
                <li>
                    Item 1
                </li>

                <li>
                    Item 2
                </li>

                <li>
                    Item 3
                </li>

                <li>
                    Item 4
                </li>

                <li>
                    Item 5
                </li>
            </ul>
        </div>
    </aside>
    <!-- fin aside -->

</div>
<!-- fin parte central -->

<?php get_footer();  ?>