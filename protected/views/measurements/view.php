<?php
/* @var $this MeasurementsController */
/* @var $model Measurements */

$this->breadcrumbs=array(
	'Measurements'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Measurements', 'url'=>array('index')),
	array('label'=>'Create Measurements', 'url'=>array('create')),
	array('label'=>'Update Measurements', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Measurements', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Measurements', 'url'=>array('admin')),
);
?>

<h1>View Measurements #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Name',
	),
)); ?>
