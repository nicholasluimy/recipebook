<?php
/* @var $this IngredientsController */
/* @var $model Ingredients */

$this->breadcrumbs=array(
	'Ingredients'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Ingredients', 'url'=>array('index')),
	array('label'=>'Create Ingredients', 'url'=>array('create')),
	array('label'=>'Update Ingredients', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Ingredients', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ingredients', 'url'=>array('admin')),
);
?>

<h1>View Ingredients #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Name',
	),
)); ?>
