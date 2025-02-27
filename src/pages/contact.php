<?php include($_SERVER['DOCUMENT_ROOT'].'/admin/runtime.php'); ?>
<?php perch_layout('global.header'); ?>

<div am-ImageHeader>
	<h1><?php perch_content('Main Header'); ?></h1>
</div>

<div class="columns row mb2">
	
	<?php perch_content('Intro'); ?>
	<?php perch_content_custom('Footer', array(
	'template' => 'contact_details.html')); ?>
	
</div>


<?php perch_layout('global.footer'); ?>