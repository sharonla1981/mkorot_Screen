<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGenerals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ParGenerals', 'url'=>array('index')),
	array('label'=>'Create ParGeneral', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('parGeneralgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage ParGenerals</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'parGeneralgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'param',
        'sub_param',
        'param_value',
        'param_text',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("parGeneral/view/", 
                                            array("param"=>$data->param, "sub_param"=>$data->sub_param
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("parGeneral/update/", 
                                            array("param"=>$data->param, "sub_param"=>$data->sub_param
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("parGeneral/delete/", 
                                            array("param"=>$data->param, "sub_param"=>$data->sub_param
											))',
                ),
            ),
        ),
    ),
)); ?>
