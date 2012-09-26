<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'param'); ?>
		<?php echo $form->textField($model,'param'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'sub_param'); ?>
		<?php echo $form->textField($model,'sub_param'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'param_value'); ?>
		<?php echo $form->textField($model,'param_value'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'param_text'); ?>
		<?php echo $form->textField($model,'param_text'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
