<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>
////////////////////////////////////////   CATEGORY-COURS.PHP 
<main id="primary" class="site-main">

<?php if ( have_posts() ) : ?>

  <header class="page-header">
    <?php
    the_archive_title( '<h1 class="page-title">', '</h1>' );
    the_archive_description( '<div class="archive-description">', '</div>' );
    ?>
  </header><!-- .page-header -->

  <?php
  /* Start the Loop */
        $precedent = 0;
  while ( have_posts() ) :
    the_post();
            if (in_category("web")){
                echo "<span>Web</span>";
            }
    echo "<span style='color:red'> - " . get_field('type_de_cours') . '</span>';
            $titre = get_the_title();
            $session = substr($titre, 4,1);
            if ($precedent != $session){
                echo '<p>Session : ' .  $session . '</p>';    
            }

            echo '<p>' .  $session . ' ' . $titre . '</p>';
            $precedent = $session;
  endwhile;
endif;
?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();