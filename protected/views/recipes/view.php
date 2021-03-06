<?php
/* @var $this RecipesController */
/* @var $model Recipes */



/*
$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Recipes', 'url'=>array('index')),
	array('label'=>'Create Recipes', 'url'=>array('create')),
	array('label'=>'Update Recipes', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Recipes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recipes', 'url'=>array('admin')),
);
?>

<h1>View Recipes #<?php echo $model->Name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Name',
	),
)); ?>

*/


$this->breadcrumbs=array(
	'Recipes'=>array('index'),
	$model->Name,
);


$this->menu=array(
	array('label'=>'List Recipes', 'url'=>array('index')),
	array('label'=>'Create Recipes', 'url'=>array('create')),
	array('label'=>'Update Recipes', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Recipes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recipes', 'url'=>array('admin')),
);
?>

<h1>View Recipes #<?php echo $model->Name; ?></h1>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'IngredientId',          // display the 'title' attribute
		'Quantity',  // display the 'name' attribute of the 'category' relation
		'MeasurementId',   // display the 'content' attribute as purified HTML

	),
));
?>



