<?php
$this->breadcrumbs=array(
	'Mkorot Gauges'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MkorotGauge', 'url'=>array('index')),
	array('label'=>'Create MkorotGauge', 'url'=>array('create')),
	array('label'=>'Update MkorotGauge', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MkorotGauge', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MkorotGauge', 'url'=>array('admin')),
);
?>

<h1>View MkorotGauge #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gauge_id',
		'years',
		'months',
		'period',
		'amount',
		'area_id',
		'id',
	),
)); ?>
