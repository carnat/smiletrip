<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property integer $event_id
 * @property string $event_name
 * @property string $event_detail
 * @property string $event_picture
 * @property string $start_at
 * @property string $end_at
 * @property string $event_description
 * @property string $event_image
 */
class Event extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Event the static model class
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
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_name, event_detail, event_picture, start_at, end_at, event_description, event_image', 'required'),
			array('event_name, event_detail', 'length', 'max'=>100),
			array('event_picture, event_description, event_image', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('event_id, event_name, event_detail, event_picture, start_at, end_at, event_description, event_image', 'safe', 'on'=>'search'),
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
			'event_id' => 'Event',
			'event_name' => 'Event Name',
			'event_detail' => 'Event Detail',
			'event_picture' => 'Event Picture',
			'start_at' => 'Start At',
			'end_at' => 'End At',
			'event_description' => 'Event Description',
			'event_image' => 'Event Image',
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

		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('event_name',$this->event_name,true);
		$criteria->compare('event_detail',$this->event_detail,true);
		$criteria->compare('event_picture',$this->event_picture,true);
		$criteria->compare('start_at',$this->start_at,true);
		$criteria->compare('end_at',$this->end_at,true);
		$criteria->compare('event_description',$this->event_description,true);
		$criteria->compare('event_image',$this->event_image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}