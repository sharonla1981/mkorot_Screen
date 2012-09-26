<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGenerals'=>array('index'),
	'View'=>array('view', 'param'=>$model->param, 'sub_param'=>$model->sub_param),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParGeneral', 'url'=>array('index')),
	array('label'=>'Create ParGeneral', 'url'=>array('create')),
	array('label'=>'View ParGeneral', 'url'=>array('view', 'param'=>$model->param, 'sub_param'=>$model->sub_param)),
	array('label'=>'Manage ParGeneral', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
