<?php
/* @var $this RecipesController */
/* @var $model Recipes */

$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	$model->Name=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recipes', 'url'=>array('index')),
	array('label'=>'Create Recipes', 'url'=>array('create')),
	array('label'=>'View Recipes', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Recipes', 'url'=>array('admin')),
);
?>

<h1>Update Recipes <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>