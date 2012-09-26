<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'param'); ?>
        <?php echo $form->textField($model,'param'); ?>
        <?php echo $form->error($model,'param'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'sub_param'); ?>
        <?php echo $form->textField($model,'sub_param'); ?>
        <?php echo $form->error($model,'sub_param'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'param_value'); ?>
        <?php echo $form->textField($model,'param_value'); ?>
        <?php echo $form->error($model,'param_value'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'param_text'); ?>
        <?php echo $form->textField($model,'param_text'); ?>
        <?php echo $form->error($model,'param_text'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
