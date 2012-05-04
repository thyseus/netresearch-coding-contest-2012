<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'book-form',
			'enableAjaxValidation'=>false,
			)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
<?php echo $form->labelEx($model,'title'); ?>
<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
<?php echo $form->error($model,'title'); ?>
</div>

<div class="row">
<?php echo $form->labelEx($model,'author'); ?>
<?php echo $form->dropDownList($model,'author',
		CHtml::listData(Author::model()->findAll(), 'id', 'name')); ?>
<?php echo $form->error($model,'author'); ?>
</div>

<div class="row">
<?php echo $form->labelEx($model,'category'); ?>
<?php echo $form->dropDownList($model,'category',
		CHtml::listData(Category::model()->findAll(), 'id', 'name')); ?>
<?php echo $form->error($model,'category'); ?>
</div>

<div class="row">
<?php echo $form->labelEx($model,'description'); ?>
<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
<?php echo $form->error($model,'description'); ?>
</div>

<div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
