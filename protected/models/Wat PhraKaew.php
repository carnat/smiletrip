<?php

/**
 * This is the model class for table "Wat PhraKaew".
 *
 * The followings are the available columns in table 'Wat PhraKaew':
 * @property integer $ITEM
 * @property string $NAME
 * @property string $ArtistName
 * @property string $TAG
 * @property string $HISTORY
 */
class Wat PhraKaew extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Wat PhraKaew the static model class
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
		return 'Wat PhraKaew';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ITEM, NAME, ArtistName, TAG, HISTORY', 'required'),
			array('ITEM', 'numerical', 'integerOnly'=>true),
			array('NAME, HISTORY', 'length', 'max'=>1000),
			array('ArtistName, TAG', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ITEM, NAME, ArtistName, TAG, HISTORY', 'safe', 'on'=>'search'),
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
			'ITEM' => 'Item',
			'NAME' => 'Name',
			'ArtistName' => 'Artist Name',
			'TAG' => 'Tag',
			'HISTORY' => 'History',
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

		$criteria->compare('ITEM',$this->ITEM);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('ArtistName',$this->ArtistName,true);
		$criteria->compare('TAG',$this->TAG,true);
		$criteria->compare('HISTORY',$this->HISTORY,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}