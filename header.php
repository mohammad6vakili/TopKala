<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 

    <?php wp_head(); ?>

</head> 

<body>
		<div class='header'>
			<div class="header-top">
				<img class="header-logo" src="<?php echo get_template_directory_uri();?>/assets/images/irankala 1.png" alt="topkala">
				<div class="search-wrapper">
					<input class="header-search-input" placeholder="جستجوی محصولات" />
					<i class="fa fa-search header-search-icon"></i>
				</div>
				<button class="login-btn">
					<i class="fa fa-user-o"></i>
					ورود به حساب کاربری
				</button>
			</div>	
			<div class="header-bottom">
				<?php 
					wp_nav_menu(
						array(
							'menu'=>'primary',
							'container'=>'',
							'theme_location'=>'primary',
							'items_wrap'=>'<ul class="mega-menu">%3$s</ul>'
						)
					)
				?>
			</div>	
		</div>

			<!-- <h1 class="heading"><?php the_title(); ?></h1> -->