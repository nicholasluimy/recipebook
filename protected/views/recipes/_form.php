<?php
/* @var $this RecipesController */
/* @var $modelR Recipes */
/* @var $modelC Components */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recipes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modelR, $modelC); ?>

	<div class="row">
		<?php echo $form->labelEx($modelR,'Name'); ?>
		<?php echo $form->textField($modelR,'Name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($modelR,'Name'); ?>
	</div>


	<div class="row">
		Ingredient: 
		<?php echo CHtml::dropDownList("Ingredient", $modelC,
			CHtml::listData(Ingredients::model()->findAll(),'Id','Name'), array('empty' => '(Select a category)')); ?>
	</div>

	<div class="row">
		Measurement:
		<?php echo CHtml::dropDownList("Measurement", $modelC,
			CHtml::listData(Measurements::model()->findAll(),'Id','Name'), array('empty' => '(Select a category)')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelC,'Quantity'); ?>
		<?php echo $form->textField($modelC,'Quantity'); ?>
		<?php echo $form->error($modelC,'Quantity'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($modelR->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

