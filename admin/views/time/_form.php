<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'time-form',
        'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php
$resMovie = Theatre::model()->getMovie();

foreach ($resMovie as $row) {
    $catList[$row->id] = $row->name;
}

echo $form->dropDownListGroup(
        $model, 'movie_id', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'data' => $catList,
        'htmlOptions' => array(),
    )
        )
);
?>

	<?php
$res = Theatre::model()->getHall();

foreach ($res as $row) {

    $catList[$row->id] = $row->name;
}

echo $form->dropDownListGroup(
        $model, 'hall_id', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'data' => $catList,
        'htmlOptions' => array(),
    )
        )
);
?>

	<?php echo $form->textFieldGroup($model,'startTime',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
        <p style="margin-left: 200px;font-size: 12px;">Time in Format of <span class="required">H:m:s</span></p>
	<?php echo $form->textFieldGroup($model,'endTime',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'status',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
