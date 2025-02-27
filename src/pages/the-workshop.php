<?php include($_SERVER['DOCUMENT_ROOT'].'/admin/runtime.php'); ?>
<?php perch_layout('global.header'); ?>

<div am-ImageHeader>
	<h1><?php perch_content('Main Header'); ?></h1>
</div>

<div am-BigIntro>

	<div am-BigIntro-Text="left">

		<?php perch_content('Intro'); ?>
		<?php perch_content('Icons'); ?>

	</div>

</div>

<div class="columns row">

		<h3><?php perch_content('Workshop Activities Title'); ?></h3>

</div>


<?php perch_content('Workshop Activities'); ?>


<?php perch_layout('global.footer'); ?>