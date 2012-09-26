<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mkorot-gauge-form',
    'action'=>Yii::app()->createUrl('//mkorotGauge/create'),
	'enableAjaxValidation'=>true,
));  ?>
<?php /*
	<p class="note">Fields with <span class="required">*</span> are required.</p>
*/ ?>
	<?php echo $form->errorSummary($model); ?>
	<div class="row">

		<?php echo $form->labelEx($model,'gauge_id'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                        'name'=>'area_gauge', //name of the html field that will be generated
                        'sourceUrl'=>$this->createUrl('MkorotGauge/getGaugeOptionsAjax'),
                        'options'=>array(
                            'max'=>10, //specifies the max number of items to display
                            'select'=>'js:function(event, ui){
                                        $("#MkorotGauge_gauge_id").val(ui.item["id"]);
                                         var gaugeId = ui.item["id"];
                                         $.ajax({
                                                 url: "index.php?r=mkorotGauge/getGaugeAreaIdOptionsAjax",
                                                             type: "GET",
                                                             //jsonpCallback: "jsonCallback",
                                                             //contentType: "application/json",
                                                            // dataType: "json",
                                                             async: "false",
                                                             data: "term1=" + gaugeId,
                                                             success: function(data) {
                                                               //var area = jQuery.parseJSON(data);
                                                                //alert(data);
                                                                $("#MkorotGauge_area_id").val(data); return false;
                                                            },
                                                             error: function(data) {
                                                                //alert(data.responseText);
                                                            }
                                          });


                                }'
                        ),
                        'htmlOptions'=>array(
                            //'style'=>'height:20px;',
                            'class'=>'rounded',
                        ),
                    ));
        ?>
        <?php echo $form->hiddenField($model,'gauge_id'); ?>
		<?php echo $form->error($model,'gauge_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'years'); ?>
		<?php echo $form->textField($model,'years',array('class'=>'rounded')); ?>
		<?php echo $form->error($model,'years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'months'); ?>
		<?php echo $form->textField($model,'months',array('class'=>'rounded')); ?>
		<?php echo $form->error($model,'months'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'period'); ?>
		<?php echo $form->textField($model,'period',array('class'=>'rounded')); ?>
		<?php echo $form->error($model,'period'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('class'=>'rounded')); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
        <?php /*
		<?php echo $form->labelEx($model,'area_id'); ?>
		<?php //echo $form->dropDownList($model,'area_id',MkorotGauge::model()->getAreaOptions()); ?>
        <?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'name'=>'area', //name of the html field that will be generated
        'sourceUrl'=>$this->createUrl('MkorotGauge/getAreaOptionsAjax'),
        'options'=>array(
            //'minLength'=>'2',
            'matchCase'=>true, //match case when performing a lookup?
            'max'=>10, //specifies the max number of items to display
            'select'=>'js:function(event, ui){ $("#MkorotGauge_area_id").val(ui.item.id); }',
        ),
        'htmlOptions'=>array(
            //'style'=>'height:20px;',
            'class'=>'rounded'
        ),
    ));
        ?>
 */ ?>
        <?php echo $form->hiddenField($model,'area_id'); ?>
		<?php echo $form->error($model,'area_id'); ?>
	</div>
	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'הוסף' : 'Save',array('class'=>'rounded-corners')); ?>
		<?php echo CHtml::ajaxSubmitButton('הוסף',array('MkorotGauge/create'),
                    array('success'=>'function(e,u) {
                                //$("#mkorotGaugeViewEdit).html(e.html); return false;
                                $("#mkorot-gauge-form").each
                                        (function(){this.reset();
                                $("#mkorotDataGrid").load(location.href+" #mkorotDataGrid>*", "");return false;
                                        }); }'),array('class'=>'rounded-corners')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<script type=text/javascript>
   /* $.ajax({
        url: "index.php?r=mkorotGauge/getGaugeOptionsAjax",
        type: "GET",
        //jsonpCallback: "jsonCallback",
        //contentType: "application/json",
        dataType: "json",
        async: "false",
        data: "term=" + "8",
        success: function(event, ui) {
            //var area = jQuery.parseJSON(data);
            alert(ui); return false;
            //$("#MkorotGauge_area_id").val(data);
        },
        error: function(data) {
            alert(data.responseText);
        }
    }); */
</script>