
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
<!--<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'> -->
<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
<title><?php bloginfo('name') ?></title>



<!-- Google fonts -->
<?php wp_head() ;?>
</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href=""><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
                     <?php wp_nav_menu(array(
                      'theme_location'=>'Menu',
                      'items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'menu_class'=>'nav navbar-nav navbar-right scroll',
                      'depth'=>'2',
                      'container'=>false
                       )); ?>

            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>