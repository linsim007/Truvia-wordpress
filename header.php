<?php global $TruviaRedux;?>
<!doctype html>
<html lang="<?php language_attributes();?>">
    <head>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex, nofollow">
        <?php wp_head();?>
        <style>
            <?php echo $MeetcuteRedux['css_editor']; ?>
        </style>
    </head>
    <body <?php body_class();?>>
    <!-- header styling starts -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img class="nabvar-img img-fluid" src="<?php echo $TruviaRedux['logop']['url']; ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu([

                        'theme_location'    => 'main-menu',
                        'menu_class'        => 'navbar-nav',
                        'container'         => ' ',
                        'walker'            =>new WP_Bootstrap_Navwalker(),
                    ]);?> 
                </div>
            </nav>
        </div>
    </header>
    <!-- header ends -->