<?php
/* @var $this PlaceController */
/* @var $model Place */

$this->breadcrumbs=array(
	'Places'=>array('index'),
	$model->Name=>array('view','id'=>$model->PlaceID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Place', 'url'=>array('index')),
	array('label'=>'Create Place', 'url'=>array('create')),
	array('label'=>'View Place', 'url'=>array('view', 'id'=>$model->PlaceID)),
	array('label'=>'Manage Place', 'url'=>array('admin')),
);
?>

<h1>Update Place <?php echo $model->PlaceID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>