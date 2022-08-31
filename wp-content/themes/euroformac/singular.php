<?php get_header();  ?>
<!-- inicio parte central -->
<div class="container">

    <!-- inicio parte izquierda -->
    <div class="izquierda">
        <section>
            <!--  /*inicio del famoso LOOP  de Wordpress */ -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                
                <h1 class="titulo"><?php the_title();?></h1>
                <p><?php the_content();?></p>
                  
                    




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