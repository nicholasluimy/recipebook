<?php
/* @var $this IngredientsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ingredients',
);

$this->menu=array(
	array('label'=>'Create Ingredients', 'url'=>array('create')),
	array('label'=>'Manage Ingredients', 'url'=>array('admin')),
);
?>

<h1>Ingredients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
