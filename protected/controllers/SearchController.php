<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchController
 *
 * @author hp
 */
class SearchController extends Controller
{
    public function actionIndex()
{
    $model=new Blogs('search');
    $model->unsetAttributes();  // clear any default values
    if(isset($_GET['Blogs']))
        $model->attributes=$_GET['Blogs'];
 
    //send model object for search
    $this->render('NewSearchDemo',array(
        'dataProvider'=>$model->search(),
        'model'=>$model)
    ); 
}
    
    
    //put your code here
}

?>
