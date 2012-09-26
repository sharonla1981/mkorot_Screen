<?php
$this->breadcrumbs=array(
	'Mkorot Gauges'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MkorotGauge', 'url'=>array('index')),
	array('label'=>'Create MkorotGauge', 'url'=>array('create')),
	array('label'=>'View MkorotGauge', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MkorotGauge', 'url'=>array('admin')),
);
?>

<h1>Update MkorotGauge <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>