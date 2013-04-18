<?php

/**
 * This is the model class for table "promotion".
 *
 * The followings are the available columns in table 'promotion':
 * @property string $detail
 * @property integer $PlaceID
 * @property integer $promotion_id
 * @property string $promotion_picture
 */
class Promotion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Promotion the static model class
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
		return 'promotion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('detail, PlaceID, promotion_picture', 'required'),
			array('PlaceID', 'numerical', 'integerOnly'=>true),
			array('detail, promotion_picture', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('detail, PlaceID, promotion_id, promotion_picture', 'safe', 'on'=>'search'),
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
			'detail' => 'Detail',
			'PlaceID' => 'Place',
			'promotion_id' => 'Promotion',
			'promotion_picture' => 'Promotion Picture',
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

		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('PlaceID',$this->PlaceID);
		$criteria->compare('promotion_id',$this->promotion_id);
		$criteria->compare('promotion_picture',$this->promotion_picture,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}