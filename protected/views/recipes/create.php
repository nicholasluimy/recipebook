<?php
/* @var $this RecipesController */
/* @var $model Recipes */

$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recipes', 'url'=>array('index')),
	array('label'=>'Manage Recipes', 'url'=>array('admin')),
);
?>

<h1>Create Recipes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>