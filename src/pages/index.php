<?php include($_SERVER['DOCUMENT_ROOT'].'/admin/runtime.php'); ?>
<?php perch_layout('global.header', array(
	'page' => 'home'
)); ?>

<div am-BigIntro>
	<img am-BigIntro-Title src="/assets/img/logo_wide.svg">

	<?php perch_content('Hero Image'); ?>


	<div am-BigIntro-Text>

		<?php perch_content('Intro'); ?>
		
	</div>


</div>


<?php perch_layout('global.footer'); ?>