<?php get_header()?>
<body>
	<div class="wrapper">
        <div id="header">
			<a href="<?php echo home_url('/')?>"><img src="<?php echo get_bloginfo('template_directory');?>/images/schoolLogo.png" alt="Logo" /></a>
    	</div><!--end of header-->
		
        <div id="main">
        	<div id="imgBar">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/frozen_law_cropped.png" alt="Law School Entrance" />
			</div>
			<div id="titleBar"><a href="<?php echo home_url('/')?>"><h3><?php bloginfo('title')?></h3></a></div>
			
			<?php get_sidebar()?>
				<?php 

					while(have_posts()): the_post();?>
	
						
						<div id="title">
							<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
						</div>	
						
						
						<div id="post">
							<?php the_content(__('Continue Reading'));?>
						</div>
		
				<?php endwhile;?>
				
			<?php comments_template('', true);?>
			
		</div><!--end of main-->
              
    </div><!--end of wrapper-->
	
<?php get_footer()?>