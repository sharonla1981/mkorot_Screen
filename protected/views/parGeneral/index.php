<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGenerals',
);

$this->menu=array(
	array('label'=>'Create ParGeneral', 'url'=>array('create')),
	array('label'=>'Manage ParGeneral', 'url'=>array('admin')),
);
?>

<h1>ParGenerals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
