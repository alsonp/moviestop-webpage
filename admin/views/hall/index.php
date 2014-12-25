<?php
$this->breadcrumbs=array(
	'Halls',
);

$this->menu=array(
array('label'=>'Create Hall','url'=>array('create')),
array('label'=>'Manage Hall','url'=>array('admin')),
);
?>

<h1>Halls</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
