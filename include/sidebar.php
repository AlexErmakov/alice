<div class="service_page_sidebar">
    <?php 
        $query = new WP_Query( 
            array( 
                'post_type' => 'service',
                'posts_per_page' => -1
            ) 
        );
    ?>
	<div class="service_page_sidebar_title">Услуги</div>
	<ul class='service_page_sidebar_list'>
        <?php while ( $query->have_posts() ) :
            $query->the_post();?>
            <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
        <?php endwhile;?>
	    <?php wp_reset_query(); ?>
	</ul>
</div>