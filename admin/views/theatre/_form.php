<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'theatre-form',
    'type' => 'horizontal',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldGroup($model, 'name', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 45)))); ?>
<?php
$res = $model->getHall();

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

<?php
$res = $model->getMovie();

foreach ($res as $row) {
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
echo $form->dropDownListGroup(
        $model, 'status', array(
    'wrapperHtmlOptions' => array(
        'class' => 'col-sm-5',
    ),
    'widgetOptions' => array(
        'data' => array('1' => 'Active', '0' => 'InActive'),
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
