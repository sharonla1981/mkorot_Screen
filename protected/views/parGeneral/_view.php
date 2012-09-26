<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'param'=>$data->param, 'sub_param'=>$data->sub_param)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('param')); ?>:</b>
	<?php echo CHtml::encode($data->param); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('sub_param')); ?>:</b>
	<?php echo CHtml::encode($data->sub_param); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('param_value')); ?>:</b>
	<?php echo CHtml::encode($data->param_value); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('param_text')); ?>:</b>
	<?php echo CHtml::encode($data->param_text); ?><br />
</div>
