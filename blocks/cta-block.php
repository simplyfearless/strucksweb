<?php

$text = get_field('title') ?: 'Your Title here...';
$copy = get_field('copy') ?: 'Your Copy here...';
$bg_image = get_field('bg');
$bg_color = get_field('bg_color');
$text_color = get_field('text_color');
$ctalink =  get_field('cta_link') ?: 'Your Link here...';
$ctatext =  get_field('cta_text') ?: 'Your Link here...';

?>
<div class="container-fluid CTA-Block" style="background-image: url('<?php echo $bg_image; ?>'); background-color: <?php echo $bg_color; ?>;">
	<div class="row">
		<div class="col-12 text-center">
			<h2 style="color: <?php echo $text_color; ?>!important;"><?php echo $text; ?></h2>
			<p style="color: <?php echo $text_color; ?>!important;"><?php echo $copy; ?></p>
			<a class="cta colored" href="<?php echo $ctalink; ?>"><?php echo $ctatext; ?></a>
		</div>
	</div>
</div>
