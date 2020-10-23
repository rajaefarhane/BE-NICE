<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bring_back
 */

get_header();
?>

    <main id="main" class="site-main min">
        <!-- .page-404 start -->
        <section class="page-404 pt-90">
            <div class="container">
                  <img src="2420671.jpg"/>
                    <div class="error-404 not-found col-12">
                        <h1 class="page-title"><?php esc_html_e( 'la page que vous recherchez semble introuvable.', 'bring-back' ); ?></h1>
                        <div class="page-content">
                            <p><?php esc_html_e( 'Desolé la pahe que vous cherchez n exixste pas sur le serveur, essayez de chercher une page dans la bare de recherche?', 'bring-back' ); ?></p>

                            <?php
                            get_search_form();
                            ?>

                        </div><!-- .page-content -->
                    </div><!-- .error-404 -->
                </div>
            </div>
        </section>
        <!-- .page-404 end -->
    </main><!-- #main -->

<?php
get_footer();
