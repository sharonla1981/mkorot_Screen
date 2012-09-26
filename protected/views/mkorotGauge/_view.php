<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gauge_id')); ?>:</b>
	<?php echo CHtml::encode($data->gauge_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('years')); ?>:</b>
	<?php echo CHtml::encode($data->years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('months')); ?>:</b>
	<?php echo CHtml::encode($data->months); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period')); ?>:</b>
	<?php echo CHtml::encode($data->period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_id')); ?>:</b>
	<?php echo CHtml::encode($data->area_id); ?>
	<br />


</div>