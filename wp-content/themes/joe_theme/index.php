
    



    <!-- funcion que pinta un header por defecto en wp -->
    <?php get_header();  ?>
<?php 

if (have_posts()):
    while ( have_posts() ): the_post();?>


    <!-- funcion wp pinta el titulo -->
    <h2><?php the_title(); ?></h2>

    <!-- funcion wp pinta el contenido del post -->
    <?php the_content();  ?>

    <!-- funcion que añade un enlace para que nos lleve al contenido del post -->
    <a href="<?php the_permalink();?>">
        <?php the_title()  ?>
    </a>
    <?php endwhile;
else:
    echo '<p> There are no post </p>';
endif;
?>
<!-- pinta un footer en mi tema de wp (hay que ponerlo fuera del bucle-->
<?php get_footer();  ?>

</body>
</html>