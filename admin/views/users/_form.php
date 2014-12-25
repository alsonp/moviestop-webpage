<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'users-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldGroup($model, 'fullName', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 45)))); ?>

<?php echo $form->textFieldGroup($model, 'username', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 45)))); ?>

<?php echo $form->passwordFieldGroup($model, 'password', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 255)))); ?>

<?php echo $form->textFieldGroup($model, 'email', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 45)))); ?>

<?php echo $form->dropDownListGroup(
			$model,
			'status',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => array('1' => 'Active' , '0' => 'InActive'),
					'htmlOptions' => array(),
				)
			)
		); ?>
    

<div class="form-actions">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
