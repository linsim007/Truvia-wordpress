<?php get_header();?>

<!-- news section starts -->
<section class="news">
    <div class="container">
        <div class="row">
            <div class="main-news col-md-6 col-sm-12">
                <h1 class="news-title mb-40"><?php echo $TruviaRedux['news_head']; ?></h1>
                
                <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                    <div class="news-truvian">
                        <h2 class="news-header"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        <div class="cat mt-10">
                            <a><?php the_category( ', ' ); ?>-</a>
                            <span class="date"><?php the_time('F j, Y'); ?></span>
                        </div>
                        <p class="entry-text"><?php echo wp_trim_words( get_the_content(), 40, '...' );?>... <a class="more" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'truvia_post_url',true));?>">Read more</a></p>
                        <span class="dot news-dot">...</span>
                    </div>
                    <?php endwhile;
                else :
                _e( 'Sorry, no posts were found.', 'textdomain' );
                endif;
                ?>    
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</section>
<!-- news section ends -->

<?php get_footer();?>