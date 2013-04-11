<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property string $Cost
 * @property string $Date
 * @property integer $MemberID
 * @property integer $PlaceID
 * @property string $CodeID
 * @property string $catagory
 */
class Transaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transaction the static model class
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
		return 'transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cost, Date, MemberID, PlaceID, CodeID, catagory', 'required'),
			array('MemberID, PlaceID', 'numerical', 'integerOnly'=>true),
			array('Cost, CodeID, catagory', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Cost, Date, MemberID, PlaceID, CodeID, catagory', 'safe', 'on'=>'search'),
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
			'Cost' => 'Cost',
			'Date' => 'Date',
			'MemberID' => 'Member',
			'PlaceID' => 'Place',
			'CodeID' => 'Code',
			'catagory' => 'Catagory',
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

		$criteria->compare('Cost',$this->Cost,true);
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('MemberID',$this->MemberID);
		$criteria->compare('PlaceID',$this->PlaceID);
		$criteria->compare('CodeID',$this->CodeID,true);
		$criteria->compare('catagory',$this->catagory,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}