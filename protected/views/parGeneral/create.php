<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGenerals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ParGenerals', 'url'=>array('index')),
    array('label'=>'Manage ParGeneral', 'url'=>array('admin')),
);
?>

<h1>Create ParGeneral</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
