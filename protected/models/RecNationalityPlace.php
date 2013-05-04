<?php

/**
 * This is the model class for table "rec_nationality_place".
 *
 * The followings are the available columns in table 'rec_nationality_place':
 * @property string $Nationality
 * @property integer $PlaceID
 */
class RecNationalityPlace extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RecNationalityPlace the static model class
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
		return 'rec_nationality_place';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nationality, PlaceID', 'required'),
			array('PlaceID', 'numerical', 'integerOnly'=>true),
			array('Nationality', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Nationality, PlaceID', 'safe', 'on'=>'search'),
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
			'Nationality' => 'Nationality',
			'PlaceID' => 'Place',
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

		$criteria->compare('Nationality',$this->Nationality,true);
		$criteria->compare('PlaceID',$this->PlaceID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}