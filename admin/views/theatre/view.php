<?php
$this->breadcrumbs=array(
	'Theatres'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List Theatre','url'=>array('index')),
array('label'=>'Create Theatre','url'=>array('create')),
array('label'=>'Update Theatre','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Theatre','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Theatre','url'=>array('admin')),
);
?>

<h1>View Theatre #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
		'status',
		'movie_id',
		'hall_id',
),
)); ?>
