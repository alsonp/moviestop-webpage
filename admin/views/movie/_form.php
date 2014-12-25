<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'movie-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php
$res = $model->getCategory();

foreach ($res as $row) {

    $catList[$row->id] = $row->Name;
}

echo $form->dropDownListGroup(
        $model, 'category_id', array(
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

<?php echo $form->textFieldGroup($model, 'name', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 85)))); ?>
<?php $this->renderPartial("../common/_ckfinder", array('form' => $form, 'model' => $model));?>
<?php //echo $form->textFieldGroup($model, 'image', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 255)))); ?>

<?php echo $form->textFieldGroup($model, 'genre', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 85)))); ?>

<?php echo $form->textFieldGroup($model, 'releaseDate', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>
<p style="margin-left: 200px;font-size: 12px;">Date in Format of <span class="required">YYYY-MM-DD</span></p>
<?php
echo $form->dropDownListGroup(
        $model, 'status', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'data' => array('1' => 'Released', '0' => 'Upcoming'),
        'htmlOptions' => array(),
    )
        )
);
?>

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
