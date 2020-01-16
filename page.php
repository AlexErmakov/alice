<?php get_header(); ?>
<?php the_post();?>
<div class="main_container">
	<div class="container">
		<h1 class='main_title'><?php the_title(); ?></h1>
		<div class="single_default_wrap">
			<div class="content_default"><?php the_content();?></div>
        </div>   
	</div>
</div>
<?php get_footer(); ?>