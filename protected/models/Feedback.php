<?php

/**
 * This is the model class for table "feedback".
 *
 * The followings are the available columns in table 'feedback':
 * @property string $Comment
 * @property integer $Rating
 * @property integer $MemberID
 * @property integer $PlaceID
 * @property integer $feedback_id
 */
class Feedback extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feedback the static model class
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
		return 'feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Comment, Rating, MemberID, PlaceID, feedback_id', 'required'),
			array('Rating, MemberID, PlaceID, feedback_id', 'numerical', 'integerOnly'=>true),
			array('Comment', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Comment, Rating, MemberID, PlaceID, feedback_id', 'safe', 'on'=>'search'),
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
			'Comment' => 'Comment',
			'Rating' => 'Rating',
			'MemberID' => 'Member',
			'PlaceID' => 'Place',
			'feedback_id' => 'Feedback',
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

		$criteria->compare('Comment',$this->Comment,true);
		$criteria->compare('Rating',$this->Rating);
		$criteria->compare('MemberID',$this->MemberID);
		$criteria->compare('PlaceID',$this->PlaceID);
		$criteria->compare('feedback_id',$this->feedback_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}