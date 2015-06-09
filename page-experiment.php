

<?php wp_head(); ?>

<?php $args = array( 'post_type' => 'picture', );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
echo "<div class=\"image\">";
echo "<img style=\"width: 200px;\" src=\"";
the_field('pictures');
echo "\">";
echo "</div>";
endwhile;
?>

<div class="calendar-div" style="width:500px;">
<?php echo do_shortcode('[eventlist limit="15"]') ?>
</div>

<?php wp_footer(); ?>

<style>
#wpadminbar {
	display: none !important;
}

.cat1, .cat1 .fc-event-skin, .fc-agenda .cat1, a.cat1, a.cat1:active, a.cat1:visited{
	background-color:purple !important;
}
</style>