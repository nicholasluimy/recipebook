<?php
/* @var $this IngredientsController */
/* @var $model Ingredients */

$this->breadcrumbs=array(
	'Ingredients'=>array('index'),
	$model->Name=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ingredients', 'url'=>array('index')),
	array('label'=>'Create Ingredients', 'url'=>array('create')),
	array('label'=>'View Ingredients', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Ingredients', 'url'=>array('admin')),
);
?>

<h1>Update Ingredients <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>