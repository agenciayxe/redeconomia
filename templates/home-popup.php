<?php 
date_default_timezone_set("America/Sao_Paulo");
$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
$argsPopup = array(
	'post_type' => 'popup',
	'order' => 'DESC',
	'orderby' => 'date',
	'posts_per_page' => 1,
	'meta_query' => array(
		'relation' => 'OR',
		array( 'key' => 'validade', 'compare' => 'NOT EXISTS', 'value' => '' ),
		array( 'key' => 'validade', 'value' => $timeCurrent, 'compare' => '>', 'type' => 'DATE' ),
		array( 'key' => 'validade', 'value' => '', 'compare' => '=', ),
		
	)
);
$popupQuery = new WP_Query( $argsPopup );
if ($popupQuery->have_posts()) {
	while ($popupQuery->have_posts()) {
		$popupQuery->the_post();
		?>
		<div class="modal fade modal-destaque" id="destaque" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
					<div class="modal-body">
						<?php if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><?php } ?>
						<img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" width="100%" alt="" />
						<?php if (get_field('link')) { ?></a><?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
	}
}
?>