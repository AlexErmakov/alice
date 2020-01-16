<?php get_header(); ?>
<?php the_post();?>
<div class="main_container">
	<div class="container">
        <div class="single_two_column">
            <?php  get_template_part('include/sidebar');?> 
            <div class="single_content_column">
				<h1 class='main_title'><?php single_cat_title();?></h1>
                <div class="cat_news_list">
                    <?php if ($posts) : ?>
						<?php foreach ($posts as $post) : setup_postdata ($post); ?>
							<div class="cat_post_item">
								<a href="<?php the_permalink(); ?>" class="cat_post_item_images">
									<?php the_post_thumbnail('large'); ?>
								</a>
								<div class="cat_post_item_info">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="cat_post_item_info_t"><?php the_excerpt();?></div>
									<a href="<?php the_permalink(); ?>" class="btn_def cat_post_item_more">Подробнее</a> 
								</div>
							</div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php get_template_part( 'include/pagination'); ?>	
                </div>  
            </div>   
        </div>
    </div>
</div>
 
<?php get_footer(); ?>