<?php

class SearchTrailController extends Controller
{
/*	public function actionIndex()
{
            $TypeID = $_GET['id'];
            
            $data['place'] = Place::model()->findAllByAttributes(
                    array('TypeID' => $TypeID)
                     );
            
		$this->render('index',$data);
                
	}
 * 
 */
    public function actionIndex()
{
    $model=new Blogs('search');
    $model->unsetAttributes();  // clear any default values
    if(isset($_GET['Blogs']))
        $model->attributes=$_GET['Blogs'];
 
    //send model object for search
    $this->render('index',array(
        'dataProvider'=>$model->search(),
        'model'=>$model)
    ); 
}
        public function actionPlace(){
            $placeid=  $_GET['id'];
            $data['place'] = Place::model()->findByAttributes(
                    array('PlaceID'=>$placeid)
                    );
            $this->render('place',$data);
        }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}