<?php
$this->breadcrumbs=array(
		'Categories'=>array('index'),
		$model->name,
		);

$this->menu=array(
		array('label'=>'List Category', 'url'=>array('index')),
		array('label'=>'Create Category', 'url'=>array('create')),
		array('label'=>'Update Category', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Delete Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Category', 'url'=>array('admin')),
		);
?>

<h1> <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
				'name',
				),
			)); ?>


<p> Bücher: </p>

<?  if($model->books) {
	echo '<ul>';
	foreach($model->books as $book) {
		printf('<li>%s</li>', CHtml::link($book->title, array(
						'//book/view', 'id' => $book->id)));	
	}
	echo '</ul>';
}
else echo '<p> Noch keine Bücher in dieser Kategorie vorhanden. </p>';
