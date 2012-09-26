<?php /*
$this->breadcrumbs=array(
	'Mkorot Gauges',
);

$this->menu=array(
	array('label'=>'Create MkorotGauge', 'url'=>array('create')),
	array('label'=>'Manage MkorotGauge', 'url'=>array('admin')),
);
?>

<h1>Mkorot Gauges</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
*/ ?>
<div id='addMkorotData'>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div><!--addMkorotData-->
<div id='mkorotGaugeViewEdit'>
<?php echo $this->renderPartial('_mkorotGaugeForm', array('dataProvider'=>$dataProvider,'model'=>$model)); ?>
</div>