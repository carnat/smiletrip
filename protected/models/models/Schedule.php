<?php

/**
 * This is the model class for table "schedule".
 *
 * The followings are the available columns in table 'schedule':
 * @property integer $PlaceID
 * @property integer $MemberID
 * @property string $Date
 */
class Schedule extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Schedule the static model class
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
		return 'schedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PlaceID, MemberID, Date', 'required'),
			array('PlaceID, MemberID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PlaceID, MemberID, Date', 'safe', 'on'=>'search'),
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
			'PlaceID' => 'Place',
			'MemberID' => 'Member',
			'Date' => 'Date',
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

		$criteria->compare('PlaceID',$this->PlaceID);
		$criteria->compare('MemberID',$this->MemberID);
		$criteria->compare('Date',$this->Date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}