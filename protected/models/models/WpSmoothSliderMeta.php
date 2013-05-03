<?php

/**
 * This is the model class for table "wp_smooth_slider_meta".
 *
 * The followings are the available columns in table 'wp_smooth_slider_meta':
 * @property integer $slider_id
 * @property string $slider_name
 */
class WpSmoothSliderMeta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WpSmoothSliderMeta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wp_smooth_slider_meta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('slider_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('slider_id, slider_name', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'slider_id' => 'Slider',
			'slider_name' => 'Slider Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('slider_id',$this->slider_id);
		$criteria->compare('slider_name',$this->slider_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}