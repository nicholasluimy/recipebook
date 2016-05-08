<?php
/* @var $this RecipesController */
/* @var $dataProvider CActiveDataProvider */


$this->breadcrumbs=array(
	'Recipes',
);




$this->menu=array(
	array('label'=>'Create Recipes', 'url'=>array('create')),
	array('label'=>'Manage Recipes', 'url'=>array('admin')),
);
?>

<h1>Recipes</h1>
<?php
foreach($dataProvider as $recipeName => $components){
	echo $recipeName;
	echo "<br>";
	foreach($components as $component){
		echo $component['ingredient'];
		echo " ";
		echo $component['quantity'] . " " . $component['measurement'];
		echo "<br>";

	}

	echo "<br><br>";
}
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
