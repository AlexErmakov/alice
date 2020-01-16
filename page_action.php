<?php
/*
Template Name:  Акции
 */
?>

<?php get_header(); ?>
<?php the_post();?>
<div class="main_container">
	<div class="container">
        <div class="single_two_column">
            <?php  get_template_part('include/sidebar');?> 
            <div class="single_content_column">
                <h1 class='main_title'><?php the_title(); ?></h1>
                <div class="single_default_wrap">
                    <?php if( have_rows('акции') ): ?>
                        <div class="action_page_wrap">
                            <?php while( have_rows('акции') ): the_row(); 
                                $image = get_sub_field('фото');
                                $content = get_sub_field('текст');
                            ?>
                                <div class="action_page_item">
                                    <?php if( $image ): ?>
                                        <a class='action_page_item_img' data-fancybox="actions" href="<?php echo $image['url']; ?>">
                                            <img src="<?php echo $image['url']; ?>" />
                                        </a>
                                    <?php endif; ?>
                                    <?php if( $content ): ?>
                                        <div class="action_page_item_text">
                                            <?php echo $content; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>  
            </div>
        </div>
	</div>
</div>
<?php get_footer(); ?>