<?php
/* @var $this RecipesController */
/* @var $data Recipes */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>

	<br />
	-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<!-- <?php echo CHtml::encode($data->Name); ?> -->
	<?php echo CHtml::link(CHtml::encode($data->Name), array('view', 'id'=>$data->Id)); ?>
	<br />


</div>