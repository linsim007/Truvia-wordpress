<?php global $TruviaRedux;?>

    <!-- footer section starts -->
    <footer class="footer bg-img" id="contact" style="background-image:url('<?php echo $TruviaRedux['footerbg']['url']; ?>');">
        <div class="container">
            <div class="row">
                <div class="footer-top col-12">
                    <h2 class="entry-header white title mb-30"><?php echo $TruviaRedux['touch']; ?></h2>
                    <div class="footer-form">
                        <?php echo do_shortcode('[contact-form-7 id="82" title="truvia contact form"]');?>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="footer-bottom-left col-md-6 col-sm-12">
                    <div class="footer-logo">
                        <img class="img-fluid" src="<?php echo $TruviaRedux['logof']['url']; ?>" alt="">
                    </div>
                    <div class="address mt-30">
                        <?php echo $TruviaRedux['footeraddress']; ?>
                    </div>
                </div>
                
                <div class="footer-bottom-right col-md-6 col-sm-12">
                    <div class="footer-social">
                        <?php if ($TruviaRedux['facebook']) :?>
                        <a class="footer-icon" targer="_blank" href="<?php echo esc_url($TruviaRedux['facebook']);?>"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/f.png" alt=""></a>
                        <?php endif;?>
                        
                        <?php if ($TruviaRedux['linkedin']) :?>
                        <a class="footer-icon" targer="_blank" href="<?php echo esc_url($TruviaRedux['linkedin']);?>"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/in.png" alt=""></a>
                        <?php endif;?>
                        
                        <?php if ($TruviaRedux['twitter']) :?>
                        <a class="footer-icon" targer="_blank" href="<?php echo esc_url($TruviaRedux['twitter']);?>"><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/t.png" alt=""></a>
                        <?php endif;?>
                        
                    </div>
                    <div class="policy-text mt-30">
                        <p class="white">
                            <?php wp_nav_menu([
        
                                'theme_location'    => 'footer-menu',
                                'menu_class'        => ' ',
                                'container'         => ' ',
                            ]);?> 
                        </p>
                        <p class="white"><?php echo $TruviaRedux['copyright']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer();?>
    <script>
    	<?php echo $TruviaRedux['js_editor']; ?>
    </script>
    </body>
</html>