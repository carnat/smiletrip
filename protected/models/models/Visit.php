<?php

/**
 * This is the model class for table "visit".
 *
 * The followings are the available columns in table 'visit':
 * @property string $Date
 * @property integer $MemberID
 * @property integer $PlaceID
 * @property integer $Month
 * @property integer $Year
 * @property integer $visit_id
 */
class Visit extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Visit the static model class
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
		return 'visit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Date, MemberID, PlaceID, Month, Year', 'required'),
			array('MemberID, PlaceID, Month, Year', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Date, MemberID, PlaceID, Month, Year, visit_id', 'safe', 'on'=>'search'),
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
			'Date' => 'Date',
			'MemberID' => 'Member',
			'PlaceID' => 'Place',
			'Month' => 'Month',
			'Year' => 'Year',
			'visit_id' => 'Visit',
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

		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('MemberID',$this->MemberID);
		$criteria->compare('PlaceID',$this->PlaceID);
		$criteria->compare('Month',$this->Month);
		$criteria->compare('Year',$this->Year);
		$criteria->compare('visit_id',$this->visit_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}