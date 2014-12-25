<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<h1>Movie Stop Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
    <?php
    /** @var TbActiveForm $form */
    $form = $this->beginWidget(
            'booster.widgets.TbActiveForm', array(
        'id' => 'verticalForm',
        'htmlOptions' => array('class' => 'well'), // for inset effect
            )
    );

    echo $form->textFieldGroup($model, 'username');
    echo $form->passwordFieldGroup($model, 'password');
    echo $form->checkboxGroup($model, 'rememberMe');
    $this->widget(
            'booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Login')
    );

    $this->endWidget();
    ?>
</div><!-- form -->
