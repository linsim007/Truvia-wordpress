<?php 
global $TruviaRedux;
/**
Template name: Homepage
**/
?>

        
    <?php get_header();?>
        
        <!-- banner section starts -->
        <section class="banner bg-img" id="home" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'banner_bg',true)?>');">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-text">
                            <h2 class="entry-title mb-30 title"><?php echo get_post_meta(get_the_ID(),'banner_title',true)?></h2>
                            <p class="entry-text"><?php echo get_post_meta(get_the_ID(),'banner_desc',true)?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner ends -->
        
        <!-- closeup image starts -->
        <section class="closeup bg-img desktop" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'parallax_bg',true)?>');"></section>
        <section class="closeup bg-img tab" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'parallax_bg_tab',true)?>');"></section>
        <section class="closeup bg-img mobile" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'parallax_bg_mobile',true)?>');"></section>
        <!-- closeup image ends -->
        
        <!-- instrument section starts -->
        <section class="instrument" id="technology">
            <div class="row bg-img" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'top_tech_bg',true)?>');">
                <div class="container">
                    <div class="instrument-text col-12">
                        <h2 class="entry-title title mb-40"><?php echo get_post_meta(get_the_ID(),'top_tech_title',true)?></h2>
                        <p class="entry-text"><?php echo get_post_meta(get_the_ID(),'top_tech_desc',true)?></p>
                        
                        <div class="instrument-icon mb-30">
                            <ul>
                                <?php 
                                    $icon_content = get_post_meta(get_the_ID(),'tech_icon_content',true);
                                    
                                    if(is_array($icon_content)) {
                                        foreach($icon_content as $icon_contents) :
                                ?>
                                    <li> 
                                        <div>
                                            <img class="icon img-fluid" src="<?php echo $icon_contents['tech_icon'];?>" alt="">
                                        </div>
                                        <span><?php echo $icon_contents['icon_content'];?></span>
                                    </li>
                                    <?php endforeach; }?>
                            </ul>
                        </div>
                        
                        <p class="entry-text another"><?php echo get_post_meta(get_the_ID(),'top_tech_bottom_content',true)?></p>
                    </div>
                </div>
            </div>
            
            <div class="row bg-img pos" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'bottom_tech_bg',true)?>');">
                <div class="container">
                    <div class="instrument-text col-12">
                        <h2 class="entry-title title mb-40"><?php echo get_post_meta(get_the_ID(),'bottom_tech_title',true)?></h2>
                        <p class="entry-text"><?php echo get_post_meta(get_the_ID(),'bottom_tech_desc',true)?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- instrument section ends -->
        
        <!-- inseight section starts -->
        <section class="inseight bg-img desktop" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'insights_parallax',true)?>');">
            <div class="container">
                <div class="row">
                    <div class="inseight-text col-12 text-center">
                        <h2 class="entry-header white title mb-40"><?php echo get_post_meta(get_the_ID(),'insights_title',true)?> </h2>
                        <p class="entry-text white mb-40"><?php echo get_post_meta(get_the_ID(),'insights_desc',true)?> </p>
                        <h2 class="pink-text uppercase"><?php echo get_post_meta(get_the_ID(),'insights_pink',true)?></h2>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="inseight bg-img tab" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'insights_parallax_tab',true)?>');">
            <div class="container">
                <div class="row">
                    <div class="inseight-text col-12 text-center">
                        <h2 class="entry-header white title mb-40"><?php echo get_post_meta(get_the_ID(),'insights_title',true)?> </h2>
                        <p class="entry-text white mb-40"><?php echo get_post_meta(get_the_ID(),'insights_desc',true)?> </p>
                        <h2 class="pink-text uppercase"><?php echo get_post_meta(get_the_ID(),'insights_pink',true)?></h2>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="inseight bg-img mobile" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'insights_parallax_mobile',true)?>');">
            <div class="container">
                <div class="row">
                    <div class="inseight-text col-12 text-center">
                        <h2 class="entry-header white title mb-40"><?php echo get_post_meta(get_the_ID(),'insights_title',true)?> </h2>
                        <p class="entry-text white mb-40"><?php echo get_post_meta(get_the_ID(),'insights_desc',true)?> </p>
                        <h2 class="pink-text uppercase"><?php echo get_post_meta(get_the_ID(),'insights_pink',true)?></h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- inseight section ends -->
        
        <!-- vision section starts -->
        <section class="vision bg-img" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'vision_parallax',true)?>');">
            <div class="container">
                <div class="row">
                    <div class="vision-text col-12 text-center">
                        <?php 
                            $vision = get_post_meta(get_the_ID(),'vision_title',true);
                            
                            if(isset($vision)) :
                        ?>
                        <h2 class="entry-text white title"><?php echo $vision;?></h2>
                        <span class="dot white mb-40">...</span>
                        <?php endif;?>
                        <p class="title white"><?php echo get_post_meta(get_the_ID(),'vision_desc',true)?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- vision section ends -->
        
        <!-- closeup image starts -->
        <section class="closeup bg-img desktop" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'another_parallax',true)?>');"></section>
        <section class="closeup bg-img tab" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'another_parallax_tab',true)?>');"></section>
        <section class="closeup bg-img mobile" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'another_parallax_mobile',true)?>');"></section>
        <!-- closeup image ends -->
        
        <!-- news section starts -->
        <section class="news bg-img" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'news_bg',true)?>');">
            <div class="container">
                <div class="row">
                    <div class="news-text col-12 text-center">
                        <h2 class="entry-text white title"><?php echo get_post_meta(get_the_ID(),'news_title',true)?></h2>
                        <span class="dot white mb-40">...</span>
                        <div class="owl-carousel owl-theme">
                            <?php 
                            $home_news = new WP_Query( [
                                'post_type'     => 'post',
                                'posts_per_page'=> 5,
                                ] );
                            if ( have_posts() ) :
                                while ( $home_news->have_posts() ) : $home_news->the_post(); ?>
                                <div class="item">
                                    <h2 class="entry-text white title mb-30"><?php the_title();?></h2>
                                    <p class="title white"><?php echo wp_trim_words( get_the_content(), 40, '...' );?>...</p>
                                    <div class="read-more" style="background-image:url('<?php echo get_template_directory_uri();?>/images/btn.png');">
                                        <a class="btn btn-truvia" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'truvia_post_url',true));?>">Read more</a>
                                    </div>
                                </div>
                            <?php endwhile; endif;
                            
                            ?>
                            
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news section ends -->
        
        <!-- about section starts -->
        <section class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="about-text col-12">
                        <h2 class="entry-title title mb-40"><?php echo get_post_meta(get_the_ID(),'truvia_about_title',true);?></h2>
                        <p class="entry-text"><?php echo get_post_meta(get_the_ID(),'truvia_about_desc',true);?></p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="about-text col-12">
                        <h2 class="entry-title title mb-40 mt-100"><?php echo get_post_meta(get_the_ID(),'truvia_executive_header',true);?></h2>
                    </div>
                </div>
                
                <div class="row our-directors tabs desktop">
                    
                    <?php 
                    $home_exevutive = new WP_Query( [
                        'post_type'     => 'executive',
                        'posts_per_page'=> -1,
                        ] );
                    $i = 1;    
                    if ( have_posts() ) :
                        while ( $home_exevutive->have_posts() ) : $home_exevutive->the_post(); 
                            if($i == 1){
                                $class="current";
                            }else {
                                $class=" ";
                            }
                        ?>
                        <div class="directors col-md-3 col-sm-6 col-xs-12">
                            <div class="directors-info">
                                <?php the_post_thumbnail('img-fluid');?>
                                <div class="directors-text">
                                    <div class="name visible">
                                        <h4><?php echo get_post_meta(get_the_ID(),'truvia_executive_name',true);?></h4>
                                        <p><?php echo get_post_meta(get_the_ID(),'truvia_executive_designation',true);?></p>
                                    </div>
                                    <div class="social">
                                        <a class="social-icon" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'truvia_executive_link_url',true));?>"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/linkedin-bio.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="bio-link">
                                    <button type="button" class="btn btn-bio tab-link <?php echo $class;?>" data-tab="tab-<?php echo $i; $i++;?>">Click for bio <span><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/arrow.png" alt=""></span></button>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif;
                    
                    ?>
                    
                    <?php wp_reset_postdata(); ?>
                </div>
                
                <div class="row desktop-tab-content">
                    <div class="col-12">
                        <?php 
                        $home_exevutive = new WP_Query( [
                            'post_type'     => 'executive',
                            'posts_per_page'=> -1,
                            ] );
                        $i = 1;    
                        if ( have_posts() ) :
                            while ( $home_exevutive->have_posts() ) : $home_exevutive->the_post(); 
                            if($i == 1){
                                $class="current";
                            }else {
                                $class=" ";
                            }
                            ?>
                            <div id="tab-<?php echo $i; $i++;?>" class="tab-content <?php echo $class;?>">
                                <?php the_content();?>
                            </div>
                        <?php endwhile; endif;
                        
                        ?>
                        
                        <?php wp_reset_postdata(); ?>
                        
                    </div>
                </div>  
                
                <div class="row our-directors tabs mobile">
                    
                    <?php 
                    $home_exevutive_mobile = new WP_Query( [
                        'post_type'     => 'executive',
                        'posts_per_page'=> -1,
                        ] );
                    $i = 1;    
                    if ( have_posts() ) :
                        while ( $home_exevutive_mobile->have_posts() ) : $home_exevutive_mobile->the_post(); 
                        ?>
                        <div class="directors-mobile col-sm-6 col-xs-12">
                            <div class="directors">
                                <div class="directors-info">
                                    <?php the_post_thumbnail('img-fluid');?>
                                    <div class="directors-text">
                                        <div class="name visible">
                                            <h4><?php echo get_post_meta(get_the_ID(),'truvia_executive_name',true);?></h4>
                                            <p><?php echo get_post_meta(get_the_ID(),'truvia_executive_designation',true);?></p>
                                        </div>
                                        <div class="social">
                                            <a class="social-icon" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'truvia_executive_link_url',true));?>"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/linkedin-bio.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="bio-link">
                                        <button type="button" class="btn btn-bio tab-link-mobile <?php echo $class;?>" data-tab="tab-<?php echo $i; $i++;?>">Click for bio <span><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/arrow.png" alt=""></span></button>
                                    </div>
                                </div>
                                <div class="tab-content tab-content-mobile">
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif;
                    
                    ?>
                    
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <!-- about section ends -->
        
        <section class="board-directors">
            <div class="container">
                <div class="row">
                    <div class="about-text col-12">
                        <h2 class="entry-title title mb-40 mt-100"><?php echo get_post_meta(get_the_ID(),'truvia_director_header',true);?></h2>
                    </div>
                </div>
                
                <div class="row our-directors tabs-2 desktop">
                    <?php 
                    $home_director = new WP_Query( [
                        'post_type'     => 'directors',
                        'posts_per_page'=> -1,
                        ] );
                    $i = 50;    
                    if ( have_posts() ) :
                        while ( $home_director->have_posts() ) : $home_director->the_post(); 
                            if($i == 50){
                                $class="current";
                            }else {
                                $class=" ";
                            }
                        ?>
                        <div class="directors col-md-3 col-sm-12">
                            <div class="directors-info">
                                <div class="directors-text">
                                    <div class="name">
                                        <h4><?php echo get_post_meta(get_the_ID(),'truvia_director_name',true);?></h4>
                                    </div>
                                </div>
                                <div class="bio-link">
                                    <button type="button" class="btn btn-bio tab-link <?php echo $class;?>" data-tab="tab-<?php echo $i; $i++;?>">Click for bio <span><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/arrow.png" alt=""></span></button>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif;
                    
                    ?>
                    
                    <?php wp_reset_postdata(); ?>
                    
                </div>
                
                <div class="row desktop-tab-content">
                    <div class="col-12">
                        <?php 
                        $home_director = new WP_Query( [
                            'post_type'     => 'directors',
                            'posts_per_page'=> -1,
                            ] );
                        $i = 50;    
                        if ( have_posts() ) :
                            while ( $home_director->have_posts() ) : $home_director->the_post(); 
                            if($i == 50){
                                $class="current";
                            }else {
                                $class=" ";
                            }
                            ?>
                            <div id="tab-<?php echo $i; $i++;?>" class="tab-content2 <?php echo $class;?>">
                                <?php the_content();?>
                            </div>
                        <?php endwhile; endif;
                        
                        ?>
                        
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>  
                
                <div class="row our-directors tabs-2 mobile">
                    <?php 
                    $home_director_mobile = new WP_Query( [
                        'post_type'     => 'directors',
                        'posts_per_page'=> -1,
                        ] );
                    $i = 50;    
                    if ( have_posts() ) :
                        while ( $home_director_mobile->have_posts() ) : $home_director_mobile->the_post(); 
                        ?>
                        <div class="directors-mobile col-sm-6 col-xs-12">
                            <div class="directors">
                                <div class="directors-info">
                                    <div class="directors-text">
                                        <div class="name">
                                            <h4><?php echo get_post_meta(get_the_ID(),'truvia_director_name',true);?></h4>
                                        </div>
                                    </div>
                                    <div class="bio-link">
                                        <button type="button" class="btn btn-bio tab-link-mobile <?php echo $class;?>" data-tab="tab-<?php echo $i; $i++;?>">Click for bio <span><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/arrow.png" alt=""></span></button>
                                    </div>
                                </div>
                                <div class="tab-content2 tab-content2-mobile">
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                        
                    <?php endwhile; endif;
                    
                    ?>
                    
                    <?php wp_reset_postdata(); ?>
                    
                </div>
            </div>
        </section>
        
        <!-- career section starts -->
        <section class="career bg-img" id="career" style="background-image:url('<?php echo get_post_meta(get_the_ID(),'career_bg',true);?>');">
            <div class="container">
                <div class="row">
                    <div class="career-text col-12 text-center">
                        <p class="entry-header white title mb-40"><?php echo get_post_meta(get_the_ID(),'career_desc',true);?></p>
                    </div>
                    
                    <div class="read-more" style="background-image:url('<?php echo get_template_directory_uri();?>/images/btn.png');">
                        <a class="btn btn-truvia" target="_blank" href="<?php echo esc_url(get_post_meta(get_the_ID(),'career_btn_link',true));?>"><?php echo get_post_meta(get_the_ID(),'career_btn_text',true);?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- career section ends -->
        
        <!-- carousel section starts -->
        <section class="truvia-carousel" id="culture">
            <div class="owl-carousel owl-theme">
                <?php 
                    $culture_image = get_post_meta( get_the_ID(), 'culture_img', true );
                    
                    foreach ( $culture_image as $culture_images ) :
                ?>
                <div class="item">
                    <img class="img-fluid" src="<?php echo $culture_images;?>" alt="">
                </div>
            <?php endforeach ;?>
            </div>
        </section>
        <!-- carousel section ends -->
        
        
    <?php get_footer('home');?>    

