<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGenerals'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List ParGeneral', 'url'=>array('index')),
	array('label'=>'Create ParGeneral', 'url'=>array('create')),
	array('label'=>'Update ParGeneral', 'url'=>array('update', 'param'=>$model->param, 'sub_param'=>$model->sub_param)),
	array('label'=>'Delete ParGeneral', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'param'=>$model->param, 'sub_param'=>$model->sub_param),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParGeneral', 'url'=>array('admin')),
);
?>

<h1>View ParGeneral</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'param',
		'sub_param',
		'param_value',
		'param_text',
	),
)); ?>
