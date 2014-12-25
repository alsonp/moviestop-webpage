<?php
$this->breadcrumbs=array(
	'Movies'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List Movie','url'=>array('index')),
array('label'=>'Create Movie','url'=>array('create')),
array('label'=>'Update Movie','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Movie','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Movie','url'=>array('admin')),
);
?>

<h1>View Movie #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'category_id',
		'name',
		'image',
		'genre',
		'releaseDate',
		'status',
),
)); ?>
