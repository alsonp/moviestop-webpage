<?php
$this->breadcrumbs=array(
	'Theatres'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Theatre','url'=>array('index')),
	array('label'=>'Create Theatre','url'=>array('create')),
	array('label'=>'View Theatre','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Theatre','url'=>array('admin')),
	);
	?>

	<h1>Update Theatre <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>