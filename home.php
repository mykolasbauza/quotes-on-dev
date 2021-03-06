<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                 <div class="site-branding">
                     <div class="logo">
                         <h1 class="site-title screen-reader-text"><a href="https://quotes.academy.red/" rel="home">Quotes on Dev</a></h1>
                         <a href="https://quotes.academy.red/" rel="home">                                              
                         </a>
                     </div>
            
                <!-- <button type="button" id="get_quote">Show Me Another!</button> -->
                                                
                 </div><!-- .site-branding -->
                </header>
            <?php endif; ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content' ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>