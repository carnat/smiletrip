<?php
/* @var $this PlaceController */
/* @var $model Place */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'place-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TypeID'); ?>
		<?php echo $form->textField($model,'TypeID'); ?>
		<?php echo $form->error($model,'TypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textField($model,'detail',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
   
	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'latitude'); ?>
		<?php echo $form->textField($model,'latitude'); ?>
		<?php echo $form->error($model,'latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longtitude'); ?>
		<?php echo $form->textField($model,'longtitude'); ?>
		<?php echo $form->error($model,'longtitude'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->