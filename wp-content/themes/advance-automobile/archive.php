<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Advance Automobile
 */
get_header(); ?>

<main role="main" id="maincontent" class="our-services">
    <div class="innerlightbox">
        <div class="container">
            <?php
            $advance_automobile_left_right = get_theme_mod( 'advance_automobile_layout_options','Right Sidebar');
            if($left_right == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4"><?php get_sidebar();?></div>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                          while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content' , get_post_format() ); 
                          endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                          endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_automobile_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-automobile' ),
                                        'next_text'          => __( 'Next page', 'advance-automobile' ),
                                        'before_page_number' => '<span class="meta-nav text-uppercase p-2 screen-reader-text">' . __( 'Page', 'advance-automobile' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>
                    </div>
                </div>
            <?php }else if($advance_automobile_left_right == 'Right Sidebar'){ ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' );
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_automobile_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-automobile' ),
                                        'next_text'          => __( 'Next page', 'advance-automobile' ),
                                        'before_page_number' => '<span class="meta-nav text-uppercase p-2 screen-reader-text">' . __( 'Page', 'advance-automobile' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }else if($advance_automobile_left_right == 'One Column'){ ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content' , get_post_format() ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' );
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'advance_automobile_blog_post_pagination',true) != '') { ?>
                        <div class="navigation">
                            <?php
                            
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'advance-automobile' ),
                                    'next_text'          => __( 'Next page', 'advance-automobile' ),
                                    'before_page_number' => '<span class="meta-nav text-uppercase p-2 screen-reader-text">' . __( 'Page', 'advance-automobile' ) . ' </span>',
                                ) );
                            ?>
                        </div> 
                    <?php } ?> 
                </div>
            <?php }else if($advance_automobile_left_right == 'Grid Layout'){ ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-9 col-md-9 row'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' ); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' );
                            endif; 
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                          while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/single-post' ); 
                          endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                          endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_automobile_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-automobile' ),
                                        'next_text'          => __( 'Next page', 'advance-automobile' ),
                                        'before_page_number' => '<span class="meta-nav text-uppercase p-2 screen-reader-text">' . __( 'Page', 'advance-automobile' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?> 
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format()); 
                            endwhile;
                            else :
                                get_template_part( 'no-results' );
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'advance_automobile_blog_post_pagination',true) != '') { ?>
                            <div class="navigation">
                                <?php
                                
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'advance-automobile' ),
                                        'next_text'          => __( 'Next page', 'advance-automobile' ),
                                        'before_page_number' => '<span class="meta-nav text-uppercase p-2 screen-reader-text">' . __( 'Page', 'advance-automobile' ) . ' </span>',
                                    ) );
                                ?>
                            </div> 
                        <?php } ?> 
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            <?php }?>
            <div class="clearfix"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>