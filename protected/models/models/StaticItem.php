<?php

/**
 * This is the model class for table "static_item".
 *
 * The followings are the available columns in table 'static_item':
 * @property string $Type
 * @property string $Description
 * @property string $Name
 * @property integer $PlaceID
 * @property string $CIDOC
 * @property integer $ItemID
 */
class StaticItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StaticItem the static model class
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
		return 'static_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Type, Description, Name, PlaceID, ItemID', 'required'),
			array('PlaceID, ItemID', 'numerical', 'integerOnly'=>true),
			array('Type, Description, Name, CIDOC', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Type, Description, Name, PlaceID, CIDOC, ItemID', 'safe', 'on'=>'search'),
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
			'Type' => 'Type',
			'Description' => 'Description',
			'Name' => 'Name',
			'PlaceID' => 'Place',
			'CIDOC' => 'Cidoc',
			'ItemID' => 'Item',
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

		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('PlaceID',$this->PlaceID);
		$criteria->compare('CIDOC',$this->CIDOC,true);
		$criteria->compare('ItemID',$this->ItemID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}