<?php
$this->breadcrumbs=array(
	'Authors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Author', 'url'=>array('index')),
	array('label'=>'Create Author', 'url'=>array('create')),
	array('label'=>'Update Author', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Author', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Author', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>

<p> Bücher dieses Autors: </p>

<?  if($model->books) {
	echo '<ul>';
	foreach($model->books as $book) {
		printf('<li>%s</li>', CHtml::link($book->title, array(
						'//book/view', 'id' => $book->id)));	
	}
	echo '</ul>';
}
else echo '<p> Noch keine Bücher dieses Autors vorhanden. </p>';
