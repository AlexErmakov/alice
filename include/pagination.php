<?php $args = array(
	    'show_all'     => False, 
        'end_size'     => 1,     
        'mid_size'     => 1,     
        'prev_next'    => true,  
        'prev_text'    => __('<'),
        'next_text'    => __('>'),
        'add_args'     => False,
        'add_fragment' => '',    
        'screen_reader_text' => __( ' ' ),
        'num_pages' => 10, 
		'step_link' => 10
);	?>
<?php if (get_the_posts_pagination()): ?>
	<div class="pagintation_block">
		<div class="container">
			<div class="pagintation_block_title">Навигация по страницам:</div>
			<?php echo the_posts_pagination( $args ); ?>
		</div>
	</div>
<?php endif ?>