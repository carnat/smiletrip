<?php

/**
 * This is the model class for table "result_mining".
 *
 * The followings are the available columns in table 'result_mining':
 * @property string $nationality
 * @property string $recommend_place
 * @property string $recommend_time_in_year
 * @property string $recommend_item
 * @property string $age
 */
class ResultMining extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ResultMining the static model class
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
		return 'result_mining';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nationality, recommend_place, recommend_time_in_year, recommend_item, age', 'required'),
			array('nationality, recommend_place, recommend_time_in_year, recommend_item, age', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nationality, recommend_place, recommend_time_in_year, recommend_item, age', 'safe', 'on'=>'search'),
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
			'nationality' => 'Nationality',
			'recommend_place' => 'Recommend Place',
			'recommend_time_in_year' => 'Recommend Time In Year',
			'recommend_item' => 'Recommend Item',
			'age' => 'Age',
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

		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('recommend_place',$this->recommend_place,true);
		$criteria->compare('recommend_time_in_year',$this->recommend_time_in_year,true);
		$criteria->compare('recommend_item',$this->recommend_item,true);
		$criteria->compare('age',$this->age,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}