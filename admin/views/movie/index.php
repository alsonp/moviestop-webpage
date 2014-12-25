<?php
$this->breadcrumbs=array(
	'Movies',
);

$this->menu=array(
array('label'=>'Create Movie','url'=>array('create')),
array('label'=>'Manage Movie','url'=>array('admin')),
);
?>

<h1>Movies</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
