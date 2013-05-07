<?php
$this->breadcrumbs=array(
    'Blogs',
);
 
$this->menu=array(
    array('label'=>'Create Blogs', 'url'=>array('create')),
    array('label'=>'Search Blogs', 'url'=>array('admin')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiListView.update('blogslistview', { 
        //this entire js section is taken from admin.php. w/only this line diff
        data: $(this).serialize()
    });
    return false;
});
");
?>
 
<h1>Blogs</h1>
 
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
 
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'id'=>'blogslistview',       // must have id corresponding to js above
    'sortableAttributes'=>array(
        'id',
        'startdate',
        'enddate',
        'user_id',
    ),
)); 
?>