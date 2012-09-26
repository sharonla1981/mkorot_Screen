<?php $this->beginContent('//layouts/main'); ?>

<div class="container">

	<div id="content" class="span-20" style="border-right: 1pt  ridge #a9a9a9; ">
		<?php echo $content; ?>

	</div><!-- content -->

	<div class="span-6"  >

		<p>

	<?php	$this->widget('zii.widgets.jui.CJuiAccordion', array(
                    'panels'=>array(
					'פעולות'=>CHtml::link('נתוני מקורות','index.php?r=MkorotGauge/index'),
                    'פעולות נוספות'=>'content for panel 2',
                    // panel 3 contains the content rendered by a partial view
                    //'panel 3'=>$this->renderPartial('_partial',null,true),
                    ),
                    // additional javascript options for the accordion plugin
                    'options'=>array(
                        'animated'=>'bounceslide',
                    ),
                ));
        ?>
		</p>

    </div>

</div>
<?php $this->endContent(); ?>

