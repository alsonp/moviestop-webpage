<?php
$this->breadcrumbs=array(
	'Times',
);

$this->menu=array(
array('label'=>'Create Time','url'=>array('create')),
array('label'=>'Manage Time','url'=>array('admin')),
);
?>

<h1>Times</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
