<?php

/**
 * This is the model class for table "place".
 *
 * The followings are the available columns in table 'place':
 * @property string $Name
 * @property string $Address
 * @property integer $PlaceID
 * @property integer $TypeID
 * @property string $detail
 * @property string $image
 * @property string $description
 * @property string $picture
 * @property double $latitude
 * @property double $longtitude
 */
class Pl extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pl the static model class
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
		return 'place';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name, Address, PlaceID, TypeID, detail, image, description, picture, latitude, longtitude', 'required'),
			array('PlaceID, TypeID', 'numerical', 'integerOnly'=>true),
			array('latitude, longtitude', 'numerical'),
			array('Name, Address', 'length', 'max'=>100),
			array('detail, image, picture', 'length', 'max'=>200),
			array('description', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Name, Address, PlaceID, TypeID, detail, image, description, picture, latitude, longtitude', 'safe', 'on'=>'search'),
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
			'Name' => 'Name',
			'Address' => 'Address',
			'PlaceID' => 'Place',
			'TypeID' => 'Type',
			'detail' => 'Detail',
			'image' => 'Image',
			'description' => 'Description',
			'picture' => 'Picture',
			'latitude' => 'Latitude',
			'longtitude' => 'Longtitude',
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

		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('PlaceID',$this->PlaceID);
		$criteria->compare('TypeID',$this->TypeID);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longtitude',$this->longtitude);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}