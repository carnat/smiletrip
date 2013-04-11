<?php

class BrowsePromoController extends Controller
{
	public function actionIndex()
	{
            $TypeID = $_GET['id'];
            
            $data['promotion'] = Promotion::model()->findAllByAttributes(
                    array('PlaceID' => $PlaceID)
                     );
            
		$this->render('index',$data);
                
	}
        public function actionPromotion(){
            $placeid=  $_GET['id'];
            $data['promotion'] = Promotion::model()->findByAttributes(
                    array('promotion_id'=>$promotionid)
                    );
            $this->render('promotion',$data);
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